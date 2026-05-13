<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'modelo_id',
        'descripcion',
        'estado'
    ];

    /*
    |--------------------------------------------------------------------------
    | RELACIONES
    |--------------------------------------------------------------------------
    */

    // 🔗 MODELO (RUN LINE, AVERLAY, etc.)
    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }

    // 🖼 TODAS LAS IMÁGENES (IMPORTANTE PARA HOVER)
    public function imagenes()
    {
        return $this->hasMany(ProductoImagen::class, 'producto_id')
                    ->orderBy('orden');
    }

    // 🖼 IMAGEN PRINCIPAL (OPCIONAL)
    public function imagen()
    {
        return $this->hasOne(ProductoImagen::class, 'producto_id')
                    ->orderBy('orden');
    }

    // 📦 VARIACIONES (TALLAS, STOCK, PRECIO)
    public function variaciones()
    {
        return $this->hasMany(ProductoVariacion::class, 'producto_id');
    }
}