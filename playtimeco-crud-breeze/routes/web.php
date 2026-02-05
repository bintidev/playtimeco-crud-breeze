<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ToyController;
use Illuminate\Support\Facades\Route;

/**
 * Home page
 */
Route::get('/', function () {
    return view('welcome');
});


/**
 * Dashboard - requires authentication
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/**
 * Authenticated routes for profile and toy management
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('toys', ToyController::class);
});

/**
 * Authentication routes
 */
require __DIR__.'/auth.php';
