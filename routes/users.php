<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Routes Users
Route::get('users/index', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('users', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('users', [UserController::class, 'updatePass'])->name('users.updatePass');