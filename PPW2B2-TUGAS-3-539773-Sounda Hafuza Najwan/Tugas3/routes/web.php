<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produk', ProdukController::class);

# Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');