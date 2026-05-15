<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\ProductoController;
use App\Http\Controllers\Web\CarritoController;

// HOME
Route::get('/', function () {
    return view('pages.home');
});

// PRODUCTOS
Route::get('/categoria/{categoria}', [ProductoController::class, 'categoria'])
    ->name('categoria.show');

Route::get('/producto/{id}', [ProductoController::class, 'show']);

// PISA HUEVOS
Route::get('/pisa-huevos', [ProductoController::class, 'categoria'])
    ->defaults('categoria', 'Pisa Huevos');

// CARRITO
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito');

Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])
    ->name('carrito.agregar');

Route::post('/carrito/eliminar/{key}', [CarritoController::class, 'eliminar'])
    ->name('carrito.eliminar');

Route::post('/carrito/actualizar/{key}', [CarritoController::class, 'actualizar'])
    ->name('carrito.actualizar');

// OTROS
Route::view('/favoritos', 'pages.favoritos');

require __DIR__.'/auth.php';
require __DIR__.'/navegacion.php';
require __DIR__.'/admin.php';