<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ResourceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routeas are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('public.index')->middleware('guest');
Route::get('/login', [SessionsController::class, 'create'])->name('public.login')->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->name('public.login.store')->middleware('guest');
Route::get('/register', [RegisterController::class, 'create'])->name('public.register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('public.register.store')->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->name('public.login.destroy')->middleware('auth');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('layouts.dashboard');