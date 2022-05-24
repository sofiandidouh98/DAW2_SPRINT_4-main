<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProposalController;

Route::get('/propostes', [proposalController::class, 'index'])->name('proposals.index');

Route::get('/admin/propostes', [proposalController::class, 'indexAdmin'])->name('proposals.indexAdmin');

Route::get('/propostes/crear', [proposalController::class, 'create'])->name('proposals.create');

Route::post('/propostes/crear/projecte', [proposalController::class, 'toProject'])->name('proposals.toProject');

Route::get('/admin/propostes/crear', [proposalController::class, 'createAdmin'])->name('proposals.createAdmin');

Route::get('/propostes/{proposal}', [proposalController::class, 'show'])->name('proposals.show');

Route::get('/admin/propostes/{proposal}', [proposalController::class, 'showAdmin'])->name('proposals.showAdmin');

Route::post('/propostes/crear',[proposalController::class, 'store'])->name('proposals.store');

Route::post('/admin/propostes/crear',[proposalController::class, 'storeAdmin'])->name('proposals.storeAdmin');

Route::get('/admin/propostes/{proposal}/editar', [proposalController::class, 'editAdmin'])->name('proposals.editAdmin');

Route::get('/propostes/{proposal}/editar', [proposalController::class, 'edit'])->name('proposals.edit');

Route::put('/admin/propostes/{proposal}', [proposalController::class, 'updateAdmin'])->name('proposals.updateAdmin');

Route::put('/propostes/{proposal}', [proposalController::class, 'update'])->name('proposals.update');

Route::delete('/propostes', [proposalController::class, 'destroy'])->name('proposals.destroy');