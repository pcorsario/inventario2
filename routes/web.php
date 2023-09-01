<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InventarioPDFController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\UserexcelController;
use App\Http\Controllers\InventarioexcelController;
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

Route::resource('inventario-pdf', InventarioPDFController::class);
Route::resource('inventariog-pdf', InventarioController::class);



Route::group(['middleware'=>['auth']],function(){
	Route::resource('roles',RolController::class)->name('index','roles');
	Route::resource('usuarios',UsuarioController::class)->name('index','usuarios');
	//Route::resource('productos',ProductoController::class);
});

//Route Hooks - Do not delete//
	Route::view('sginventarios', 'livewire.sginventarios.index')->middleware('auth');
	Route::view('inventarios', 'livewire.inventarios.index')->middleware('auth')->name('inventarios');
	Route::view('plantas', 'livewire.plantas.index')->middleware('auth')->name('plantas');
	Route::view('sedes', 'livewire.sedes.index')->middleware('auth')->name('sedes');
	Route::view('productos', 'livewire.productos.index')->middleware('auth')->name('productos');
	Route::view('departamentos', 'livewire.departamentos.index')->middleware('auth')->name('departamentos');
	Route::view('condicions', 'livewire.condicions.index')->middleware('auth')->name('condicions');
	Route::view('categorias', 'livewire.categorias.index')->middleware('auth')->name('categorias');


	Route::get('users/export/', [UserexcelController::class, 'export']);
	Route::get('inventario-excel/export/', [InventarioexcelController::class, 'export']);