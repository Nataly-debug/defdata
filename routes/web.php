<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospedeController;

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

Route::get('/',[HospedeController::class , 'index'])->name('hospedes');

Route::get('/hospede/{id}',[HospedeController::class, 'show'])->name('hospede_show');

//Route::get('/delete{id}',[HospedeController::class, 'destroy'])->name('hospede_delete');