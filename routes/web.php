<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AviationController;
use App\Http\Controllers\VtuberController;
use App\Http\Controllers\BisManiaController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

// Community Sections
Route::prefix('aviation')->controller(AviationController::class)->group(function () {
    Route::get('/', 'index')->name('aviation');
    Route::get('/diecast', 'diecast')->name('aviation.diecast');
    Route::get('/introduction', 'introduction')->name('aviation.intro');
    Route::get('/simulations', 'simulations')->name('aviation.sim');
});

Route::prefix('vtuber')->controller(VtuberController::class)->group(function () {
    Route::get('/', 'index')->name('vtuber');
    Route::get('/introduction', 'introduction')->name('vtuber.intro');
    Route::get('/types', 'types')->name('vtuber.types');
    Route::get('/hololive', 'hololive')->name('vtuber.hololive');
});

Route::prefix('bis-mania')->controller(BisManiaController::class)->group(function () {
    Route::get('/', 'index')->name('bismania');
    Route::get('/introduction', 'introduction')->name('bismania.intro');
    Route::get('/fans', 'fans')->name('bismania.fans');
    Route::get('/ets2-mod', 'ets2Mod')->name('bismania.ets2');
});

// Auth Routes
require __DIR__.'/auth.php';

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

// Admin Routes
Route::middleware(['auth', 'can:admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Fallback Route
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});