<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/create-user', [UserController::class, 'create'])->name('user.create');

Route::post('/store-user', [UserController::class, 'store'])->name('user-store');
