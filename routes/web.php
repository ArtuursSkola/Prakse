<?php
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
Route::get('/register', [RegisterUserController::class, 'create'])->name('register');  // Updated
Route::post('/register', [RegisterUserController::class, 'store']);
