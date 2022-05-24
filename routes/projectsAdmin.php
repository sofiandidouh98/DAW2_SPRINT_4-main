<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectesController;


Route::get('projectes/admin',[ProjectesController::class, 'index'])->name('indexAdmin.list');

Route::get('projectes/crear/admin',[ProjectesController::class, 'createProjectsAdmin'])->name('projectesAdmin.create');

Route::post('projectes/admin',[ProjectesController::class, 'validateProjectsAdmin'])->name('projectesAdmin.save');

Route::get('projectes/admin/{id}', [ProjectesController::class, 'showProjectAdmin'])->name('projectAdmin.show');

Route::get('projectes/admin/{id}/edit', [ProjectesController::class, 'editProjectAdmin'])->name('projectAdmin.edit');

Route::put('projectes/admin/{project}',[ProjectesController::class, 'saveEditProjectAdmin'])->name('projectAdmin.saveEdit');

Route::delete('projectes/admin/{id}',[ProjectesController::class, 'destroyProjectAdmin'])->name('projectAdmin.delete');

/* Route::get('pacokebabista',[ProjectesController::class, 'banner'])->name('banner.show'); */