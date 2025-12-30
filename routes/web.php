<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');


// Socialite Login
Route::get('login/discord', [LoginController::class, 'redirectToProvider'])->name('login.discord');
Route::get('login/discord/callback', [LoginController::class, 'handleProviderCallback']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// User Dashboard Routes
Route::prefix('user')->name('user.')->group(function () {
    // Route::get('dashboard', 'PagesController@whoops')->name('dashboard');
    Route::get('dashboard', [UsersController::class, 'dashboard'])->name('dashboard');
});
