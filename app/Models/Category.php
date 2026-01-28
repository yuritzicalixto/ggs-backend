<?php
// app/Models/Category.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * Campos que se pueden asignar masivamente.
     * Esto protege contra vulnerabilidades de asignación masiva.
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',
    ];

    // =====================================================
    // RELACIONES
    // =====================================================

    /**
     * Relación 1:N con Product
     * Una categoría tiene MUCHOS productos.
     *
     * Ejemplo de uso:
     * $category->products; // Obtiene todos los productos de esta categoría
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    // =====================================================
    // SCOPES (Consultas reutilizables)
    // =====================================================

    /**
     * Scope para filtrar solo categorías activas.
     *
     * Uso: Category::active()->get();
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
