<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\EventsController;
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


Route::get('/', [EventsController::class, 'index'])->middleware('auth');

Route::get('/home', [EventsController::class, 'index'])->middleware('auth')->name('/home');


Route::get('/profile', [EventsController::class, 'indexProfile'])->middleware('auth');

Route::get('/event/show/{id}', [EventsController::class, 'show'])->name('show')->middleware('auth');

Route::post('/event/post', [EventsController::class, 'store'])->middleware('auth');




Route::view('/login', 'auth.login')->name('login')->middleware('guest')->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

Route::view('/register', 'auth.register')->name('register')->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store']);



Route::get('/home2', [EventsController::class, 'index'])->middleware('auth');
Route::post('/home/update/{id}', [EventsController::class, 'store'])->middleware('auth');
