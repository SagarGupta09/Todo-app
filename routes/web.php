<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;

Route::get('login', [AuthController::class,'showLoginForm'])->name('login');
Route::get('/', [AuthController::class,'showLoginForm'])->name('login');
Route::post('login', [AuthController::class,'login']);
Route::get('register', [AuthController::class,'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class,'register']);
Route::post('logout', [AuthController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::resource('todos', TodoController::class);
});

