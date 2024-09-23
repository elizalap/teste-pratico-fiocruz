<?php

use Illuminate\Support\Facades\Route;
use App\hTTP\Controllers\UserController;

Route::get('/', 'App\hTTP\Controllers\UserController@index');

Route::resource('users', UserController::class);

Route::get('/users/{id}/change-password', [UserController::class, 'showChangePasswordForm'])->name('users.change-password');
Route::post('/users/{id}/change-password', [UserController::class, 'changePassword'])->name('users.update-password');
