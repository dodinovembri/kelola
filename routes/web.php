<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/google', [App\Http\Controllers\Socialite\GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\Socialite\GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [App\Http\Controllers\Socialite\FacebookController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [App\Http\Controllers\Socialite\FacebookController::class, 'loginWithFacebook']);

Route::get('auth/twitter', [App\Http\Controllers\Socialite\TwitterController::class, 'loginwithTwitter']);
Route::get('auth/callback/twitter', [App\Http\Controllers\Socialite\TwitterController::class, 'cbTwitter']);
