<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticacion;

Route::get('/', function () {
    return view('principal');
})->middleware(Autenticacion::class);

Route::get('/privado', function () {
    return view('privado');
})->middleware(Autenticacion::class);

Route::get('/login', [UserController::class,'CheckLogin']);

Route::post('/login',[UserController::class, 'Autenticar']); 
Route::get('/logout',[UserController::class, 'logout']);