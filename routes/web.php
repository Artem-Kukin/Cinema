<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/admin/login', [LoginController::class, 'store'])->middleware('guest');

Route::post('/admin/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/admin/register', [RegisterController::class, 'create'])->middleware('auth')->name('register');
Route::post('/admin/register', [RegisterController::class, 'store'])->middleware('auth');


Route::view('/admin/index', 'admin.index')->middleware('auth')->name('dashboard');


Route::view('/', 'client.index')->name('welcome');
