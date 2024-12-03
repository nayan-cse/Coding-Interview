<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected route for dashboard
Route::middleware('auth')->get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

// User creation (only accessible by authenticated admin)
Route::middleware('auth')->post('/user/store', [UserController::class, 'store'])->name('user.store');
