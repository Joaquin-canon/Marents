<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function categoria($categoria)
    {
        // NORMALIZAR CATEGORÍA
        $categoriaFormateada = strtolower(str_replace('-', ' ', $categoria));

        // PRODUCTOS
        $productos = Producto::with([
            'modelo.categoria',
            'imagenes',
            'variaciones.talla',
            'variaciones.colorPrimario',
            'variaciones.colorSecundario'
        ])
        ->whereHas('modelo.categoria', function ($q) use ($categoriaFormateada) {

            $q->whereRaw(
                'LOWER(nombre) = ?',
                [$categoriaFormateada]
            );

        })
        ->whereHas('variaciones', function ($q) {

            $q->where('stock', '>', 0);

        })
        ->get();

        // VISTA PERSONALIZADA PISA HUEVOS
        if ($categoriaFormateada === 'pisa huevos') {

            return view('pages.categoria-personalizada', [
                'productos' => $productos,
                'categoria' => 'Pisa Huevos',
                'banner' => asset('banners/Banner_pisahuevos.jpg')
            ]);
        }

        // RESTO DE CATEGORÍAS
        return view('pages.categoria', [
            'productos' => $productos,
            'categoria' => ucfirst($categoriaFormateada),
            'banner' => 'img/banner.jpg'
        ]);
    }

    // DETALLE PRODUCTO
    public function show($id)
    {
        $producto = Producto::with([
            'modelo.categoria',
            'imagenes',
            'variaciones.talla',
            'variaciones.colorPrimario',
            'variaciones.colorSecundario'
        ])->findOrFail($id);

        $variaciones = $producto->variaciones;

        // COLORES
        $colores = $variaciones
            ->pluck('colorPrimario')
            ->filter()
            ->unique('id')
            ->values();

        // TALLAS
        $tallas = $variaciones
            ->pluck('talla.numero')
            ->unique()
            ->sort()
            ->values();

        // PRECIO PROMEDIO
        $precio = $variaciones
            ->where('stock', '>', 0)
            ->avg('precio');

        return view('producto.show', compact(
            'producto',
            'colores',
            'tallas',
            'precio'
        ));
    }
}