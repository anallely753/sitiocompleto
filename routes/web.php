<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;



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
})->middleware('welcome');

Route::resource('entrega', EntregaController::class);
Route::resource('perfil', PerfilController::class);

Route::get('cal', [App\Http\Controllers\HomeController::class, 'cal'])->name('cal');


Route::middleware(['admin'])->group(function () {
	Route::resource('admintareas', TareaController::class);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
