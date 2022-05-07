<?php

use App\Http\Controllers\VendedorController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(VendedorController::class)->group(function(){
    Route::get('vendedores','index');
    Route::get('vendedores/create','create');
    Route::get('vendedores/update','edit');
    Route::get('vendedores/only/{id}','show');
    Route::post('vendedores/store','store');
});


Route::controller(ProductoController::class)->group(function(){
    Route::get('producto','index');
    Route::get('producto/create','create');
    Route::get('producto/update','edit');
    Route::get('producto/only/{id}','show');
});
