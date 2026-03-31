<?php

use App\Http\Controllers\LogsController;
use App\Http\Controllers\EmploysController;
use App\Http\Controllers\DeptsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// Test Route For Sample

// Home / Welcome
Route::get('/', [LogsController::class, 'welcome'])->name('welcome');

// Show signup page
Route::get('/signup', [LogsController::class, 'signup'])->name('signup');

// Handle signup form submission
Route::post('/signup', [LogsController::class, 'signlog'])->name('signlog');

// All Resource Log route
Route::resource('logs', LogsController::class);

// http://127.0.0.1/logs
//logs index page route
Route::get('/logs', [LogsController::class, 'login'])->name('logs.index');

// Handle login form submission
Route::post('/store', [LogsController::class, 'store'])->name('store');

// Dashboard (after login)
Route::get('/dashboard', [LogsController::class, 'dashboard'])->name('dashboard');

// Logout
Route::get('/logout', [LogsController::class, 'logout'])->name('logout');

// Optional: index page
Route::get('/index', [LogsController::class, 'index'])->name('index');

/*
|--------------------------------------------------------------------------------|
| Dashboard Pages Routes                                                         |
|--------------------------------------------------------------------------------|
*/

// For all debugging and Test route http://127.0.0.1:8000/test

Route::resource('employ', EmploysController::class);

// http://127.0.0.1:8000/employ
// Employs page index route
Route::get('/employ', [EmploysController::class, 'employ'])->name('employ.index');

// Custom route for index2 if needed
Route::get('/index2', [EmploysController::class, 'index'])->name('index2');

// Route For DeptsController And Pages http://127.0.0.1:8000/dep/index
Route::resource('dep', DeptsController::class); // Handles all CRUD operations for 'dep'

// http://127.0.0.1:8000/depts
// Department Page index Route
Route::get('/depts', [DeptsController::class, 'depts'])->name('dep.index');

Route::get('/index3', [DeptsController::class, 'index'])->name('index3');

// All Route For Entire Template Files
Route::get('/{page}', [PagesController::class, 'showPage'])->where('page', '[a-zA-Z0-9\-]+')->name('page');