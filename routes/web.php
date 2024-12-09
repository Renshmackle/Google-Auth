<?php

use App\Http\Controllers\GoogleLoginController;

// Home Route (welcome page)
Route::get('/', function () {
    // Check if user is logged in; if yes, redirect to the dashboard
    if (session('user')) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
})->name('home');

// Dashboard Route
Route::get('/dashboard', function () {
    $user = session('user');
    // If the user is not logged in, redirect to the home page
    if (!$user) {
        return redirect()->route('home');
    }
    return view('dashboard', ['user' => $user]);
})->name('dashboard');

// Google Login Routes
Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

// Login Page Route (if needed directly for login)
Route::get('/login', function () {
    // If user is already logged in, redirect to dashboard
    if (session('user')) {
        return redirect()->route('dashboard');
    }
    return view('auth.login');
})->name('login');

// Logout Route
Route::post('/logout', [GoogleLoginController::class, 'logout'])->name('logout');