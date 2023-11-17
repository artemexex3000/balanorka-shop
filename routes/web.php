<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

Route::apiResource('signup', RegistrationController::class)->middleware('guest');
Route::apiResource('session', SessionController::class)->middleware('guest');

Route::post('session/logout', [SessionController::class, 'logout'])->middleware('auth');

Route::get('csrf', function () {
    return csrf_token();
});

Route::get('/', function (Request $request) {

    if (auth()->check()) {
        $payLink = $request->user()->newSubscription('default', $premium = 34567)
            ->returnTo('/')
            ->create();

        return view('welcome', ['payLink' => $payLink]);
    }

    return 0;
});

Route::get('test', function () {
    return auth()->check();
});
