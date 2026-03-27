<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductoController;

Route::get('/', function () {
    return view('pages.home');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/productos', [ProductoController::class, 'index']);

});

Route::get('/admin/modelos/{categoria}', function ($categoria) {
    return \App\Models\Modelo::where('categoria_id', $categoria)->get();
});

Route::get('/admin/tallas/{modelo}', function ($modelo) {
    return \App\Models\ProductoVariacion::whereHas('producto', function($q) use ($modelo){
        $q->where('modelo_id', $modelo);
    })->with('talla')->get()->pluck('talla')->unique('id')->values();
});

Route::get('/admin/producto-info/{modelo}', function ($modelo) {

    $producto = \App\Models\Producto::where('modelo_id', $modelo)
        ->with(['imagen', 'variaciones.colorPrimario', 'variaciones.colorSecundario'])
        ->first();

    if (!$producto) {
        return response()->json(null);
    }

    return response()->json($producto);
});

require __DIR__.'/auth.php';
require __DIR__.'/navegacion.php';
require __DIR__.'/admin.php';