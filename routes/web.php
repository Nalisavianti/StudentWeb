<?php

use Illuminate\Support\Facades\Route;
use App\Http\ControllerS\InventarisController;
use App\Http\ControllerS\LoginController;
use App\Http\ControllerS\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('auth', [LoginController::class, 'login']);
Route::resource('/admin-coba', AdminController::class);
