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

require __DIR__.'/auth.php';
require __DIR__.'/navegacion.php';
require __DIR__.'/admin.php';