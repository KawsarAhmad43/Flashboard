<?php

use App\Http\Controllers\Auth\ForgetPassController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Registration Routes
Route::group(['prefix' => 'auth'], function () {
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

// Password Reset Routes
Route::group(['prefix' => 'password'], function () {
    Route::get('reset', [ForgetPassController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('email', [ForgetPassController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('reset/{token}', [ResetController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset', [ResetController::class, 'reset']);
});

// Default Route
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin', [Controller::class, 'admin'])->name('admin');


// Route::get('/', function () {
//     return view('welcome');
// });
