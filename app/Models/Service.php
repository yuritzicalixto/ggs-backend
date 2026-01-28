<?php
// app/Models/Service.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Para eliminación lógica
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes; // Permite "eliminar" sin borrar de la BD

    protected $fillable = [
        'name',
        'slug',
        'description',
        'duration',    // En minutos
        'price',
        'image',
        'status',
    ];

    /**
     * Casting de atributos.
     * Laravel automáticamente convierte estos campos al tipo especificado.
     */
    protected $casts = [
        'price' => 'decimal:2',    // Siempre con 2 decimales
        'duration' => 'integer',    // Siempre entero
    ];

    // =====================================================
    // RELACIONES
    // =====================================================

    /**
     * Relación N:N con Stylist
     * Un servicio puede ser realizado por MUCHOS estilistas.
     *
     * La tabla pivote 'stylist_service' conecta ambas tablas.
     * withTimestamps() guarda created_at/updated_at en la pivote.
     */
    public function stylists(): BelongsToMany
    {
        return $this->belongsToMany(Stylist::class)
                    ->withTimestamps();
    }

    /**
     * Relación 1:N con Appointment
     * Un servicio puede estar en MUCHAS citas.
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    // =====================================================
    // SCOPES
    // =====================================================

    /**
     * Solo servicios activos.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    // =====================================================
    // ACCESSORS (Atributos calculados)
    // =====================================================

    /**
     * Devuelve la duración en formato legible.
     *
     * Ejemplo: 90 minutos → "1h 30min"
     *
     * Uso: $service->duration_formatted
     */
    public function getDurationFormattedAttribute(): string
    {
        $hours = floor($this->duration / 60);
        $minutes = $this->duration % 60;

        if ($hours > 0 && $minutes > 0) {
            return "{$hours}h {$minutes}min";
        } elseif ($hours > 0) {
            return "{$hours}h";
        }
        return "{$minutes}min";
    }

    /**
     * Devuelve el precio formateado como moneda.
     *
     * Uso: $service->price_formatted → "$150.00"
     */
    public function getPriceFormattedAttribute(): string
    {
        return '$' . number_format($this->price, 2);
    }
}
