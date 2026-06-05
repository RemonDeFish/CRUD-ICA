<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/tes', function () {
    return 'TES BERHASIL';
});

Route::resource('/buku', BukuController::class);
Route::get('/buku/hapus/{id}', [BukuController::class, 'destroy'])
    ->name('buku.hapus');