<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MessageController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

Route::get('materials', [MaterialController::class, 'index'])->name('materials.index');
Route::get('materials/crear', [MaterialController::class, 'create'])->name('materials.create');
Route::post('materials', [MaterialController::class, 'store'])->name('materials.store');
Route::get('materials/{material}', [MaterialController::class, 'show'])->name('materials.show');
Route::get('materials/{material}/editar', [MaterialController::class, 'edit'])->name('materials.edit');
Route::put('materials/{material}', [MaterialController::class, 'update'])->name('materials.update');
Route::delete('/materials', [MaterialController::class, 'destroy'])->name('materials.destroy');
