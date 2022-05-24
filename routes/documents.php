<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

Route::get('documents',[DocumentController::class, 'index'])->name('documents.index');

Route::get('documents/crear',[DocumentController::class, 'create'])->name('documents.create');

Route::post('documents',[DocumentController::class, 'store'])->name('documents.store');

Route::get('documents/{document}',[DocumentController::class, 'show'])->name('documents.show');

Route::get('documents/{document}/edit',[DocumentController::class, 'edit'])->name('documents.edit');

Route::put('documents/{document}',[DocumentController::class, 'update'])->name('documents.update');

Route::delete('/documents',[DocumentController::class, 'destroy'])->name('documents.destroy');