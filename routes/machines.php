<?php

use App\Http\Controllers\MachineController;
use Illuminate\Support\Facades\Route;

//Machine
Route::get('/maquines', [MachineController::class, 'index'])->name('machines.index');

Route::get('/maquines/crear', [MachineController::class, 'create'])->name('machines.create');

Route::post('/maquines', [MachineController::class, 'store'])->name('machines.store');

Route::get('/maquines/{machine}', [MachineController::class, 'show'])->name('machines.show');

Route::get('/maquines/{machine}/editar', [MachineController::class, 'edit'])->name('machines.edit');

Route::put('/maquines/{machine}', [MachineController::class, 'update'])->name('machines.update');

Route::delete('/maquines', [MachineController::class, 'destroy'])->name('machines.destroy');