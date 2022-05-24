<?php

use App\Http\Controllers\ReservationController;
use App\Models\Reservation;
use Doctrine\DBAL\Driver\IBMDB2\Result;
use Illuminate\Support\Facades\Route;

Route::get('reserves', [ReservationController::class, 'index'])->name('reservations.index');

Route::get('reserves/crear', [ReservationController::class, 'create'])->name('reservations.create');

Route::post('reserves', [ReservationController::class, 'store'])->name('reservations.store');

Route::get('reserves/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');

Route::get('reserves/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');

Route::put('reserves/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');

Route::delete('reserves', [ReservationController::class, 'destroy'])->name('reservations.destroy');