<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmartphoneController;

Route::get('/', [SmartphoneController::class, 'index'])->name('smartphones.index');
Route::get('/create', [SmartphoneController::class, 'create'])->name('smartphones.create');
Route::post('/store', [SmartphoneController::class, 'store'])->name('smartphones.store');
