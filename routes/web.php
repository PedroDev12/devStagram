<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/app');
});

Route::get('/', function () {
    return view('principal');
});


//Rutas para controlar los registros de los usuarios....
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);