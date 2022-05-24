<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorController;

//Routes Administrators
Route::get('administrators/index', [AdministratorController::class, 'index'])->name('administrators.index');
Route::get('administrators/create', [AdministratorController::class, 'create'])->name('administrators.create');
Route::post('administrators', [AdministratorController::class, 'store'])->name('administrators.store');
Route::get('administrators/{administrator}', [AdministratorController::class, 'show'])->name('administrators.show');
Route::get('administrators/{administrator}/edit', [AdministratorController::class, 'edit'])->name('administrators.edit');
Route::put('administrators/{administrator}', [AdministratorController::class, 'update'])->name('administrators.update');
Route::delete('administrators', [AdministratorController::class, 'destroy'])->name('administrators.destroy');
Route::put('administrators', [AdministratorController::class, 'updatePass'])->name('administrators.updatePass');