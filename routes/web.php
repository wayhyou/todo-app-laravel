<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo\TodoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// Todo Routes - Protected by auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/todo', [TodoController::class, 'index'])->name('todo');
    Route::post('/todo', [TodoController::class, 'store'])->name('todo.post');
    Route::put('/todo/{id}', [TodoController::class, 'update'])->name('todo.update');
    Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.delete');
});

// Register
Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');

// Login
Route::get('/login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

// Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');