<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
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

Route::resource('signup', RegistrationController::class)->only(['index', 'store']);
Route::resource('session', SessionController::class)->only(['index', 'store', 'logout']);

Route::get('/', function (Request $request) {

    if (auth()->check()) {
        $payLink = $request->user()->newSubscription('default', $premium = 34567)
            ->returnTo('/')
            ->create();

        return view('app', ['payLink' => $payLink]);
    }

    return 0;
});

Route::get('csrf', function () {
    return csrf_token();
});
Route::get('auth', function () {
    return auth()->check();
});

Route::get('/home', function () {
    return view('app');
});
