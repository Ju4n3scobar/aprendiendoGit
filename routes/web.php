<?php

use App\Http\Controllers\registroControlador;
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


Route::post('/contact', [registroControlador::class, 'inicioSession'])->name('contact');

Route::get('/', function () {
    return view('formulario');
});
