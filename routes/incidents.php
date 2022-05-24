<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentsController;

//Routes Incidencies
Route::get('incidencies', [IncidentsController::class, 'index'])->name('incidents.index');
Route::get('incidencies/create',[IncidentsController::class, 'create'])->name('incidents.create');
Route::post('incidencies/crear',[IncidentsController::class, 'store'])->name('incidents.store');
Route::delete('incidencies', [IncidentsController::class, 'destroy'])->name('incidents.destroy');
Route::get('incidencies/{incident}/editar', [IncidentsController::class, 'edit'])->name('incidents.edit');
Route::put('incidencies/{incident}', [IncidentsController::class, 'update'])->name('incidents.update');
