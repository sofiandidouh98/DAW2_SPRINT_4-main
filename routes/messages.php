<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('missatges', [MessageController::class, 'index'])->name('message.index');

Route::get('missatges/crear', [MessageController::class, 'create'])->name('message.create');

Route::post('missatges', [MessageController::class, 'store'])->name('message.store');

Route::get('missatges/{message}', [MessageController::class, 'show'])->name('message.show');

Route::get('missatges/{message}/edit', [MessageController::class, 'edit'])->name('message.edit');

Route::put('missatges/{message}', [MessageController::class, 'update'])->name('message.update');

Route::delete('/missatges', [MessageController::class, 'destroy'])->name('message.destroy');