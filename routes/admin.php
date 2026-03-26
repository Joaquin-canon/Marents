<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductoController;


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/usuarios', function () {
        return view('admin.usuarios.index');
    });

    Route::get('/productos', function () {
        return view('admin.productos.index');
    });

});


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/productos', [ProductoController::class, 'index']);

});