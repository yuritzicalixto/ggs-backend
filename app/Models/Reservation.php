<?php
// app/Models/Reservation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'reservation_number',
        'reservation_date',
        'expiration_date',
        'total',
        'status',
        'notes',
    ];

    protected $casts = [
        'reservation_date' => 'date',
        'expiration_date' => 'date',
        'total' => 'decimal:2',
    ];

    // =====================================================
    // EVENTOS DEL MODELO (Boot)
    // =====================================================

    /**
     * El método boot() se ejecuta cuando el modelo se inicializa.
     * Aquí configuramos comportamientos automáticos.
     */
    protected static function boot()
    {
        parent::boot();

        // Antes de crear un nuevo apartado...
        static::creating(function ($reservation) {
            // Generar número de apartado automáticamente si no existe
            if (!$reservation->reservation_number) {
                $year = now()->year;
                // Obtiene el último ID del año para generar secuencia
                $lastId = static::whereYear('created_at', $year)->max('id') ?? 0;
                $reservation->reservation_number = sprintf('APT-%d-%05d', $year, $lastId + 1);
            }

            // Establecer fecha de expiración: +7 días
            if (!$reservation->expiration_date) {
                $reservation->expiration_date = now()->addDays(7);
            }

            // Establecer fecha de apartado si no existe
            if (!$reservation->reservation_date) {
                $reservation->reservation_date = now();
            }
        });
    }

    // =====================================================
    // RELACIONES
    // =====================================================

    /**
     * El cliente que hizo el apartado.
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    /**
     * Los productos en este apartado.
     */
    public function items(): HasMany
    {
        return $this->hasMany(ReservationItem::class);
    }

    /**
     * La cita vinculada (si el cliente también agendó servicio).
     * Es opcional, por eso es HasOne y no BelongsTo.
     */
    public function appointment(): HasOne
    {
        return $this->hasOne(Appointment::class);
    }

    // =====================================================
    // SCOPES
    // =====================================================

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Apartados que vencen en los próximos 2 días.
     * Para las alertas del dashboard admin.
     */
    public function scopeExpiringSoon($query)
    {
        return $query->active()
                     ->whereDate('expiration_date', '<=', now()->addDays(2));
    }

    /**
     * Apartados ya vencidos que siguen activos.
     * Para el proceso automático de expiración.
     */
    public function scopeExpired($query)
    {
        return $query->where('status', 'active')
                     ->whereDate('expiration_date', '<', today());
    }

    // =====================================================
    // ACCESSORS
    // =====================================================

    /**
     * Días restantes antes de que expire.
     */
    public function getDaysRemainingAttribute(): int
    {
        if ($this->status !== 'active') {
            return 0;
        }
        return max(0, now()->startOfDay()->diffInDays($this->expiration_date, false));
    }

    /**
     * ¿Está por vencer? (2 días o menos)
     */
    public function getIsExpiringAttribute(): bool
    {
        return $this->status === 'active' && $this->days_remaining <= 2;
    }

    /**
     * Total formateado.
     */
    public function getTotalFormattedAttribute(): string
    {
        return '$' . number_format($this->total, 2);
    }

    // =====================================================
    // MÉTODOS DE NEGOCIO
    // =====================================================

    /**
     * Recalcula el total basado en los items.
     */
    public function recalculateTotal(): void
    {
        $this->total = $this->items->sum('subtotal');
        $this->save();
    }

    /**
     * Marca el apartado como completado (pagado y recogido).
     */
    public function markAsCompleted(): void
    {
        $this->update(['status' => 'completed']);
    }

    /**
     * Cancela el apartado y devuelve el stock de los productos.
     */
    public function cancel(): void
    {
        // Devolver stock de cada producto
        foreach ($this->items as $item) {
            $item->product->increaseStock($item->quantity);
        }

        $this->update(['status' => 'cancelled']);
    }

    /**
     * Expira el apartado (proceso automático).
     * Similar a cancelar pero con estado diferente.
     */
    public function expire(): void
    {
        foreach ($this->items as $item) {
            $item->product->increaseStock($item->quantity);
        }

        $this->update(['status' => 'expired']);
    }
}
