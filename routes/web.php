<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Rute utama
Route::get('/', function () {
    return redirect()->route('products.index'); // Redirect ke daftar produk sebagai halaman utama
});

// Rute resource untuk CRUD produk
Route::resource('products', ProductController::class);
