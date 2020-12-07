<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::group(['middleware' => 'admin'], function() {
    Route::resource('condominio','\App\Http\Controllers\condominiosController'); 
    Route::resource('propietarios', '\App\Http\Controllers\propietariosController');
    Route::resource('departamento', '\App\Http\Controllers\departamentosController');
    Route::resource('jefe_de_hogar', '\App\Http\Controllers\jefe_de_hogarController');
    Route::resource('estacionamiento', '\App\Http\Controllers\estacionamientosController');
    Route::resource('pagos', '\App\Http\Controllers\pagosController');
    Route::resource('registro', '\App\Http\Controllers\RegistroController');
});



Auth::routes();



Route::group(['middleware' => 'auth'], function() {
    
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::get('/', function() {return view('home');});


   Route::group(['prefix' => 'user'], function() {
    //
    Route::resource('registro', '\App\Http\Controllers\userRegistro');
    Route::resource('profile', '\App\Http\Controllers\userProfile');
    Route::resource('pagos', '\App\Http\Controllers\userPagos'); 
    Route::get('contact', function() {return view('users.contact');});
   
  });

});