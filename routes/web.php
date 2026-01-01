<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\AcceptedTerms;
use App\Http\Middleware\IsAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');


// Socialite Login
Route::get('login/discord', [LoginController::class, 'redirectToProvider'])->name('login.discord');
Route::get('login/discord/callback', [LoginController::class, 'handleProviderCallback']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Terms & Conditions
Route::prefix('terms')->name('terms.')->middleware(IsAuthenticated::class)->group(function () {
   Route::get('accept', [TermsController::class, 'accept'])->name('accept');
   Route::post('submit', [TermsController::class, 'submit'])->name('submit');
   Route::get('display', [TermsController::class, 'display'])->name('display');
});

// User Dashboard Routes
Route::prefix('user')->name('user.')->middleware([IsAuthenticated::class, AcceptedTerms::class])->group(function () {
    // Route::get('dashboard', 'PagesController@whoops')->name('dashboard');
    Route::get('dashboard', [UsersController::class, 'dashboard'])->name('dashboard');
});
