<?php

use App\Http\Controllers\UserController; //import this
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'welcome']);

// User Routes - Using resource controller
Route::resource('users', UserController::class);

// Movie Routes - Using resource controller for CRUD operations
Route::resource('movies', MovieController::class);

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
