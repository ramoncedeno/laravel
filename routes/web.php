<?php

use App\Http\Controllers\SaleController;
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
Route::get('/export-users',[UsersController::class,'export'])->name('export.users');

// Routes user export
Route::get('/export-sales',[SaleController::class,'export'])->name('export.sales');


// Routes user import
Route::get('/import-users', [UsersController::class, 'showImportForm'])->name('import.users'); // view form
Route::post('/import-users', [UsersController::class, 'usersimportForm'])->name('import.users'); //Import file from form

// View Users
Route::get('/view-users', [UsersController::class, 'index'])->name('view.users');

// View sales
Route::get('/view-sales', [SaleController::class, 'index'])->name('view.sales');

// Routes sales import
Route::get('/import-sales', [SaleController::class, 'showsalesimport'])->name('import.sales'); // view form
Route::post('/import-sales', [SaleController::class, 'salesimportform'])->name('import.sales'); //Import file from form



