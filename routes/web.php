<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('verified')->group(function(){
        // Dashboard
        Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');

        // Users Management
        Route::get('/users-management', fn() => view('dashboard.users-management.index'))->name('users-management');
    });

});

require __DIR__.'/auth.php';
