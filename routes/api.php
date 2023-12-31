<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChildrenAgeController;
use App\Http\Controllers\CreativityController;
use App\Http\Controllers\DesignForChildrenController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.v1.')->prefix('v1')->group(function () {
    Route::resource("umur", ChildrenAgeController::class)->only('show');
    Route::resource("kreatifitas", CreativityController::class)->only('show');
    Route::resource("design", DesignForChildrenController::class)->only('show');
    Route::resource("pembelajaran", LearnController::class)->only('show');
    Route::resource("tag", TagController::class)->only('show');
    Route::resource("kategori", CategoryController::class)->only('show');
    Route::resource("game", GameController::class)->only('show');
});
