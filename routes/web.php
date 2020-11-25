<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administracion;
use App\Http\Controllers\inventario\productos;
use App\Http\Controllers\inventario\productoscat;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

Route::get('historia/tienda', [administracion::class, 'tienda']);

Route::get('historia/contacto', [administracion::class, 'contacto']);

Route::get('productos/perros', [productos::class, 'comida']);

Route::get('productos/gatos', [productoscat::class, 'comidac']);