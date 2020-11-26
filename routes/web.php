<?php

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
Route::get('/formulario', function () {
    return view('plantilla');
});
Route::post('/valida','App\Http\Controllers\FormularioControlador@validarLogin');
Route::get('/noValido', function () {
    return view('notlogin');
});
Route::get('/valido', function () {
    return view('login');
});