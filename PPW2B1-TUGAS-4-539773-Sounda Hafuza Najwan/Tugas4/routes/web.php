<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uma', [UmaController::class, 'index'])->name('uma.index');
