<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;

Route::get('/', [WriterController::class, 'index'])->name('writers.index');

Route::get('/writers/create', [WriterController::class, 'create'])->name('writers.create');

Route::post('/writers', [WriterController::class, 'store'])->name('writers.store');

Route::get('/writers/{writer}/edit', [WriterController::class, 'edit'])->name('writers.edit');

Route::put('/writers/{writer}', [WriterController::class, 'update'])->name('writers.update');

Route::delete('/writers/{writer}', [WriterController::class, 'destroy'])->name('writers.destroy');
