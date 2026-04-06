<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function categoria($categoria)
    {
        $productos = Producto::with([
            'modelo.categoria',
            'imagen',
            'variaciones.talla'
        ])->get();

        return view('pages.categoria', [
            'productos' => $productos,
            'categoria' => $categoria,
            'banner' => 'img/banner.jpg'
        ]);
    }
}