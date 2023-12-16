<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
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

Route::get('api/', function () {
    return view('welcome');
});

Route::post('api/register/store', [RegistrationController::class, 'store'])->middleware('guest');
Route::post('api/session/store', [SessionController::class, 'store'])->middleware('guest');
Route::post('api/session/logout', [SessionController::class, 'logout'])->middleware('auth');

Route::get('api/test', function () {
    if (!Auth::check()) {
        return 'You are not in session!';
    }
    return 'You are in session';
});
