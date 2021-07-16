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


Route::post('/contactRegistro', [registroControlador::class, 'registroUser'])->name('contactRegistro');

Route::post('/contactInicio', [registroControlador::class, 'inicioSession'])->name('contactInicio');

Route::get('/', function () {
    return view('formulario');
});
