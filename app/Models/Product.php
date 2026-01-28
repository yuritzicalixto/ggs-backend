<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'brand',
        'description',
        'price',
        'stock',
        'image',
        'status',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];

    // =====================================================
    // RELACIONES
    // =====================================================

    /**
     * Relación inversa N:1 con Category
     * Un producto PERTENECE A una categoría.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relación 1:N con ReservationItem
     * Un producto puede estar en MUCHOS items de apartados.
     */
    public function reservationItems(): HasMany
    {
        return $this->hasMany(ReservationItem::class);
    }

    /**
     * Relación 1:N con CartItem
     * Un producto puede estar en MUCHOS carritos.
     */
    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    // =====================================================
    // SCOPES
    // =====================================================

    /**
     * Productos disponibles (activos y con stock).
     */
    public function scopeAvailable($query)
    {
        return $query->where('status', 'active')
                     ->where('stock', '>', 0);
    }

    /**
     * Productos con stock bajo (menos de 5 unidades).
     */
    public function scopeLowStock($query)
    {
        return $query->where('stock', '<', 5)
                     ->where('stock', '>', 0);
    }

    /**
     * Productos agotados.
     */
    public function scopeOutOfStock($query)
    {
        return $query->where('stock', '<=', 0);
    }

    // =====================================================
    // ACCESSORS
    // =====================================================

    /**
     * ¿El producto está disponible para apartar?
     */
    public function getIsAvailableAttribute(): bool
    {
        return $this->status === 'active' && $this->stock > 0;
    }

    /**
     * ¿Tiene stock bajo? (Alerta del dashboard admin)
     */
    public function getIsLowStockAttribute(): bool
    {
        return $this->stock > 0 && $this->stock < 5;
    }

    /**
     * Precio formateado.
     */
    public function getPriceFormattedAttribute(): string
    {
        return '$' . number_format($this->price, 2);
    }

    // =====================================================
    // MÉTODOS DE NEGOCIO
    // =====================================================

    /**
     * Reduce el stock del producto.
     *
     * @param int $quantity Cantidad a reducir
     * @return bool True si se pudo reducir, false si no hay suficiente stock
     */
    public function decreaseStock(int $quantity): bool
    {
        if ($this->stock < $quantity) {
            return false;
        }

        $this->decrement('stock', $quantity);
        return true;
    }

    /**
     * Aumenta el stock del producto.
     * Útil cuando se cancela un apartado y hay que devolver stock.
     */
    public function increaseStock(int $quantity): void
    {
        $this->increment('stock', $quantity);
    }
}
