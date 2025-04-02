<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('principal');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[UserController::class, 'Autenticar']); 