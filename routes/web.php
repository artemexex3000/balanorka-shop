<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/**
 * WEB
 */
Route::get('/', function () {
    return view('overview');
});
Route::resource('register', RegistrationController::class)->only(['create', 'store']);
Route::post('session/logout', [SessionController::class, 'logout'])->name('session.logout');
Route::resource('session', SessionController::class)->only(['create', 'store']);

/**
 * API
 */
Route::get('api/', function () {

});

Route::post('api/register/store', [RegistrationController::class, 'store'])->middleware('guest');
Route::post('api/session/store', [SessionController::class, 'store'])->middleware('guest');
Route::post('api/session/logout', [SessionController::class, 'logout'])->middleware('auth');

Route::get('api/products', [ProductController::class, 'index']);
Route::get('api/products/{slug}', [ProductController::class, 'show']);
Route::post('api/products/add', [ProductController::class, 'store'])->middleware('auth');

Route::get('api/test', function () {
    if (!Auth::check()) {
        return 'You are not in session!';
    }
    return 'You are in session';
});
