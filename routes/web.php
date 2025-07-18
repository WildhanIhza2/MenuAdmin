<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

// ==========================
// ADMIN AUTH ROUTES
// ==========================
// Redirect halaman awal ke halaman login admin
Route::get('/', function () {
    return redirect()->route('admin.login');
});


// Halaman form register admin
Route::get('/admin/register', [AdminAuthController::class, 'showRegister'])->name('admin.register');

// Proses register admin
Route::post('/admin/register', [AdminAuthController::class, 'register'])->name('admin.register.submit');

// Halaman form login admin
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');

// Proses login admin
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


// ==========================
// ADMIN PROTECTED ROUTES
// ==========================
Route::middleware('auth:admin')->group(function () {

    // Halaman dashboard admin
    Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

    // Proses logout admin
    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
