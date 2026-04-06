<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ProductoController as AdminProductoController;
use App\Http\Controllers\Web\ProductoController as WebProductoController;
use App\Http\Controllers\Web\ProductoController;
/*
|--------------------------------------------------------------------------
| WEB
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/producto/{id}', [WebProductoController::class, 'show']);
Route::get('/categoria/{categoria}', [ProductoController::class, 'categoria']);
/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
require __DIR__.'/navegacion.php';
require __DIR__.'/admin.php';