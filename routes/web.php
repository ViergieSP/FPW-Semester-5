<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/about', function () {
    return '
        <h1>Profil Toko POS Sejahtera</h1>
        <p>Selamat datang di <strong>POS Sejahtera</strong>.</p>
        <p>Alamat: Jl. Sudirman No. 123, Karawang</p>
        <p>Kontak: (021) 555-9876 | email: support@possejahtera.com</p>
    ';
});
 