<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;

Route::get('/', [WriterController::class, 'index'])->name('writers.index');