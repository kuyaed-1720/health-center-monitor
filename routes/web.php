<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserHasRole;

// First-timer access
Route::get('/landing', function () {
    return view('landing');
});

// Guest-level access
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('showRegistrationForm');
    Route::post('/register', [UserController::class, 'register'])->name('register');
});

// User-level access
Route::middleware(['auth'])->group(function () {
    Route::get('/', [UserController::class, 'welcome']);
    Route::get('/welcome', [UserController::class, 'welcome'])->name('welcome');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/calendar', [EventController::class, 'showCalendar'])->name('calendar');
    Route::get('/events', [EventController::class, 'getEvents']);
    Route::get('/tasks', [EventController::class, 'getTasks']);
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
});

// Admin-level access
Route::middleware(['admin'])->group(function () {
    Route::get('/users', function() {
        return view('users.index');
    });
});
