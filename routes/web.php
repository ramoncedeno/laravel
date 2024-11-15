<?php

use App\Http\Controllers\CancellationController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UsersController;
use App\Models\Cancellation;
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

// Routes sales export
Route::get('/export-sales',[SaleController::class,'export'])->name('export.sales');

// Routes cancellations export
Route::get('/export-cancellations',[CancellationController::class,'export'])->name('export.cancellations');


// Routes user import
Route::get('/import-users', [UsersController::class, 'showimportform'])->name('import.users'); // view form
Route::post('/import-users', [UsersController::class, 'usersimportform'])->name('import.users'); //Import file from form

// Routes sales import
Route::get('/import-sales', [SaleController::class, 'showsalesimport'])->name('import.sales'); // view form
Route::post('/import-sales', [SaleController::class, 'salesimportform'])->name('import.sales'); //Import file from form

// Routes cancellation import
Route::get('/import-cancellations', [CancellationController::class, 'showcancellationsimport'])->name('import.cancellations'); // view form
Route::post('/import-cancellations', [CancellationController::class, 'cancellationsimportform'])->name('import.cancellations'); //Import file from form

// View Users
Route::get('/view-users', [UsersController::class, 'index'])->name('view.users');

// View sales
Route::get('/view-sales', [SaleController::class, 'index'])->name('view.sales');

// View sales
Route::get('/view-cancellations', [CancellationController::class, 'index'])->name('view.cancellations');






