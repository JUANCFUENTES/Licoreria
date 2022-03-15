<?php

use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
    return view('welcome');
});

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

Route::resource('/productos',ProductoController::class);  //Llama a todos los metodos del controlador tipo -r, que equivale a las lineas siguientes

//Route::get('/productos',[ProductoController::class,'index']);
//Route::get('/productos/create',[ProductoController::class,'create']);


