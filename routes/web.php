<?php

use App\Http\Controllers\LogsController;
use App\Http\Controllers\EmploysController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// Test Route For Sample
Route::get('/test', function () {
    return view('test');
});
// Home / Welcome
Route::get('/', [LogsController::class, 'welcome'])->name('welcome');

// Show signup page
Route::get('/signup', [LogsController::class, 'signup'])->name('signup');

// Handle signup form submission
Route::post('/signup', [LogsController::class, 'signlog'])->name('signlog');

// Handle login form submission
Route::post('/store', [LogsController::class, 'store'])->name('store');

// Dashboard (after login)
Route::get('/dashboard', [LogsController::class, 'dashboard'])->name('dashboard');

// Logout
Route::get('/logout', [LogsController::class, 'logout'])->name('logout');

// Optional: index page
Route::get('/index', [LogsController::class, 'index'])->name('index');

// Normal Table Page
Route::get('/normal-tables', [LogsController::class, 'normal_tables'])->name('normal-tables');
/*
|--------------------------------------------------------------------------------|
| Dashboard Pages Routes                                                         |
|--------------------------------------------------------------------------------|
*/
// For all debugging and Test route http://127.0.0.1:8000/test

Route::get('/test', function () {
    return 'Test route works!';
});

// Dynamic route to handle all pages
Route::get('/{page}', [LogsController::class, 'showPage'])->where('page', '[a-zA-Z0-9\-]+')->name('page');

// Employs Route
Route::resource('employ', EmploysController::class);
Route::post('employ/store', [EmploysController::class, 'store'])->name('employ.store');
Route::get('/employ', [EmploysController::class, 'employ'])->name('employ.index');
Route::get('/employ/create', [EmploysController::class, 'create'])->name('employ.create');
Route::get('/employ/{id}/edit', [EmploysController::class, 'edit'])->name('employ.edit');
Route::put('/employ/{id}', [EmploysController::class, 'update'])->name('employ.update');
Route::delete('/employ/{id}', [EmploysController::class, 'destroy'])->name('employ.destroy');
Route::get('/employ/{id}', [EmploysController::class, 'show'])->name('employ.show');
Route::get('/index2', [EmploysController::class, 'index'])->name('index2');
