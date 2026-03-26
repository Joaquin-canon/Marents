<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Modelo;
use App\Models\Categoria;
use App\Models\Color;
use App\Models\Talla;
use App\Models\ProductoVariacion;
use App\Models\ProductoImagen;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with([
            'modelo.categoria',
            'imagen',
            'variaciones.color'
        ])->get();

        $categorias = Categoria::all();

        return view('admin.productos.index', compact(
            'productos',
            'categorias'
        ));
    }

    public function store(Request $request)
    {
        // 🔥 MODELO
        $modelo = Modelo::create([
            'nombre' => $request->modelo_nombre,
            'categoria_id' => $request->categoria_id
        ]);

        // 🔥 PRODUCTO
        $producto = Producto::create([
            'modelo_id' => $modelo->id
        ]);

        // 🔥 COLOR
        $color = Color::firstOrCreate([
            'nombre' => $request->color_nombre
        ]);

        // 🔥 TALLA
        $talla = Talla::firstOrCreate([
            'numero' => $request->talla_numero
        ]);

        // 🔥 VARIACIÓN
        ProductoVariacion::create([
            'producto_id' => $producto->id,
            'talla_id' => $talla->id,
            'color_id' => $color->id,
            'precio' => $request->precio,
            'costo' => $request->costo,
            'stock' => $request->stock,
            'tiene_descuento' => $request->valor_descuento ? true : false,
            'valor_descuento' => $request->valor_descuento
        ]);

        // 🔥 IMAGEN
        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('productos', 'public');

            ProductoImagen::create([
                'producto_id' => $producto->id,
                'url' => 'storage/'.$path
            ]);
        }

        return back()->with('success', 'Producto creado');
    }
}