<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserHasRole;

// First-timer access
Route::get('/landing', function () {
    return view('landing');
});

// Guest-level access
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login.form');
    Route::post('/login', 'login')->name('login');
    Route::get('/register','showRegistrationForm')->name('register.form');
    Route::post('/register', 'register')->name('register');
})->middleware('guest');

// User-level access
Route::middleware(['auth'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/', 'welcome');
        Route::get('/welcome', 'welcome')->name('welcome');
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::controller(EventController::class)->group(function () {
        Route::get('/calendar', 'showCalendar')->name('calendar');
        Route::get('/events', 'getEvents');
        Route::get('/tasks', 'getTasks');
        Route::get('/events/create', 'create')->name('events.create');
        Route::post('/events', 'store')->name('events.store');
    });

    // Admin-level access
    Route::get('/users', function() {
        return view('users.index');
    })->middleware('admin');
});
