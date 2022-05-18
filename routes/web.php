<?php

use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductoSucursalController;
use App\Models\Producto;
use App\Models\Producto_Sucursal;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[ProductoController::class, 'home']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*Route::get('productos',function(){
    return view('productos.indexProductos');
} )->middleware('auth');    //->middleware('auth'); Es para la seguridad de las seiones

Route::get('formProductos',function(){
    return view('productos.formProductos');
} )->middleware('auth');
*/

Route::get('about',function(){
    return view('productos.aboutProductos');
})->name('about');

//Route::get('contact',[ProductoController::class,'contact']);

Route::get('contact',function(){
    return view('productos.contactProductos');
} );

Route::resource('/productos',ProductoController::class)->except(['home']);  //Llama a todos los metodos del controlador tipo -r, que equivale a las lineas siguientes


Route::get('/stock/{producto}/{sucursal}/edit',[ProductoSucursalController::class,'edit'])->middleware('verified');
Route::get('/stock/{producto}/{sucursal}',[ProductoSucursalController::class, 'update'])->middleware('verified');

Route::get('enviar-reporte',[ProductoController::class,'enviarReporte']);

Route::post('archivo',[ArchivoController::class, 'store'])->name('archivo.store')->middleware('verified');

Route::delete('archivo/{archivo}',[ArchivoController::class, 'destroy'])->name('archivo.destory')->middleware('verified');

