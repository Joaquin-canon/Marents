<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| NAVIGATION (SOLO VISTAS ESTÁTICAS SI REALMENTE LAS NECESITAS)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
});

// Si quieres páginas fijas extra
Route::view('/favoritos', 'pages.favoritos');