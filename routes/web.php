<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NmixxController;

Route::get('/', [NmixxController::class, 'index'])->name('nmixx');
