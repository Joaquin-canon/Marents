<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoVariacion extends Model
{
    protected $table = 'producto_variacion';

    public $timestamps = false; // 🔥 IMPORTANTE

    protected $fillable = [
        'producto_id',
        'talla_id',
        'color_id',
        'precio',
        'stock'
    ];

    // 🔗 RELACIONES

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function talla()
    {
        return $this->belongsTo(Talla::class);
    }
}