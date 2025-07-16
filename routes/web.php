<?php

use Illuminate\Support\Facades\Route;

// Route halaman admin dashboard
Route::get('/', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/admin/register', function () {
    return view('admin.register');
})->name('admin.register');

