<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

Route::get('/', [AdminAuthController::class, 'showLoginForm'])->name('root');

// Group admin routes with prefix
// Route::prefix('admin')->group(function () {
//     Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
//     Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
// });
// Route::get('/', [AdminAuthController::class, 'showLoginForm']);
