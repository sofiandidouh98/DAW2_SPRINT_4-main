<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

Route::get('resources/index', [ResourceController::class, 'index'])->name('resources.index');
Route::get('resources/create', [ResourceController::class, 'create'])->name('resources.create');
Route::post('resources', [ResourceController::class, 'store'])->name('resources.store');
Route::get('resources/{resource}/edit', [ResourceController::class, 'edit'])->name('resources.edit');
Route::put('resources/{resource}', [ResourceController::class, 'update'])->name('resources.update');
Route::delete('resources', [ResourceController::class, 'destroy'])->name('resources.destroy');