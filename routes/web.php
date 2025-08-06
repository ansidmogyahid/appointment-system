<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use App\Livewire\UserManagement\Index as UserManagementIndex;
use App\Livewire\UserManagement\Create as UserManagementCreate;
use App\Livewire\UserManagement\Edit as UserManagementEdit;
use App\Livewire\Services\Index as ServiceIndex;
use App\Livewire\Services\Create as ServiceCreate;
use App\Livewire\Services\Edit as ServiceEdit;
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
        Route::get('dashboard', Dashboard::class)->name('dashboard');

        // Users Management
        Route::get('users-management', UserManagementIndex::class)->name('user-management.index');
        Route::get('users-management/create', UserManagementCreate::class)->name('user-management.create');
        Route::get('users-management/{id}/edit', UserManagementEdit::class)->name('user-management.edit');

        // Services
        // Route::resource('services', ServicesController::class)->names('services');
        Route::get('services', ServiceIndex::class)->name('services.index');
        Route::get('services/create', ServiceCreate::class)->name('services.create');
        Route::get('services/{id}/edit', ServiceEdit::class)->name('services.edit');
    });

});

require __DIR__.'/auth.php';
