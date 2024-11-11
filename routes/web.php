<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

// Routes user export
Route::get('/export-users',[UsersController::class,'export'])->name('export');

// Routes user export
Route::get('/import-users', [UsersController::class, 'showImportForm'])->name('import'); // view form
Route::post('/import-users', [UsersController::class, 'usersimportForm'])->name('import'); //Import file from form

// View Users
Route::get('/users', [UsersController::class, 'index']);
