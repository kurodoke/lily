<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ChildrenAgeController;
use App\Http\Controllers\CreativityController;
use App\Http\Controllers\DesignForChildrenController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth:admin')->name('admin.')->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::name('managemen.')->prefix('managemen')->group( function () {
        Route::resource('umur', ChildrenAgeController::class)->except('create','show','edit');
    });
    Route::name('managemen.')->prefix('managemen')->group( function () {
        Route::resource('kreatifitas', CreativityController::class)->except('create','show','edit');
    });
    Route::name('managemen.')->prefix('managemen')->group( function () {
        Route::resource('manfaat', DesignForChildrenController::class)->except('create','show','edit');
    });
    Route::name('managemen.')->prefix('managemen')->group( function () {
        Route::resource('pembelajaran', LearnController::class)->except('create','show','edit');
    });
    Route::name('managemen.')->prefix('managemen')->group( function () {
        Route::resource('tag', TagController::class)->except('create','show','edit');
    });

    Route::resource('game', GameController::class)->except('create','show','edit');
});


require_once __DIR__.'/auth.php';