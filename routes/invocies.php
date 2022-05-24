<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;




//Invoice
Route::get('factures', [InvoiceController::class, 'index'])->name('invoices.index');

Route::get('factures/crear', [InvoiceController::class, 'create'])->name('invoices.create');

Route::post('factures', [InvoiceController::class, 'store'])->name('invoices.store');

Route::get('factures/{invoice}', [InvoiceController::class, 'show'])->name('invoices.show');

Route::get('factures/{invoice}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');

Route::put('factures/{invoice}', [InvoiceController::class, 'update'])->name('invoices.update');