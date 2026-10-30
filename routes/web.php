<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// Pendaftaran komunitas lari
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/pendaftaran/berhasil', [RegistrationController::class, 'success'])->name('registration.success');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
