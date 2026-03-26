<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    public $timestamps = false; // 🔥 IMPORTANTE

    protected $fillable = [
        'nombre'
    ];

    // 🔗 RELACIÓN (opcional pero muy útil)
    public function modelos()
    {
        return $this->hasMany(Modelo::class);
    }
}