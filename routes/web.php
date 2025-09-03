<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('includes.layout');
});
Route::get('/register', [LoginController::class, 'register'])->name('admin.register');
Route::get('/login', [LoginController::class, 'login'])->name('admin.login');

