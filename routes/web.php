<?php

use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lang/{locale}', [LocalizationController::class, 'switchLang'])
    ->name('lang.switch')
    ->where('locale', '[a-zA-Z]{2}');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Protected routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Buyer dashboard
    Route::get('/buyer', function () {
        return view('buyer.index');
    })->name('buyer');
    
    // Seller dashboard
    Route::get('/seller', function () {
        return view('seller.index');
    })->name('seller');
    
    // Orders page
    Route::get('/orders', function () {
        return view('orders.index');
    })->name('orders');
    
    // Notifications page
    Route::get('/notifications', function () {
        return view('notifications.index');
    })->name('notification');
    
    // Achievements page
    Route::get('/achievements', function () {
        return view('achievements.index');
    })->name('achievements');
    
    // Profile edit page
    Route::get('/profile/edit', function () {
        return view('profile.edit');
    })->name('profile.edit');
    
    // Profile update route
    Route::patch('/profile', function () {
        // Add profile update logic here
        return redirect()->back()->with('success', 'Profile updated successfully!');
    })->name('profile.update');
});
