<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\RelationEventsController;
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

// home
Route::get('/', [EventsController::class, 'index'])->middleware('auth');

Route::get('/home', [EventsController::class, 'index'])->middleware('auth')->name('/home');


//Login - Register - Logout

Route::view('/login', 'auth.login')->name('login')->middleware('guest')->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

Route::view('/register', 'auth.register')->name('register')->middleware('guest');
Route::post('/register', [RegisteredUserController::class, 'store']);

//Profile

Route::get('/profile', [EventsController::class, 'indexProfile'])->middleware('auth');


// Events

Route::post('/event/post', [EventsController::class, 'store'])->middleware('auth');

Route::get('/user/events',[RelationEventsController::class, 'index']);

Route::get('/events', [EventsController::class, 'indexEvents'])->name('indexEvents');

Route::get('/events/{event}', 'App\Http\Controllers\EventsController@show');

Route::delete('/events/destroy/{event}', 'App\Http\Controllers\EventsController@destroy');

Route::put('/events/update/{id}', 'App\Http\Controllers\EventsController@update')->name('events/update');

// Tickets (relation)

Route::get('/events/tickets/myTickets',[RelationEventsController::class, 'index']);

Route::post('/events/tickets/store', [RelationEventsController::class, 'store']);


// extra

Route::get('/home2', [EventsController::class, 'index'])->middleware('auth');
Route::post('/home/update/{id}', [EventsController::class, 'store'])->middleware('auth');
