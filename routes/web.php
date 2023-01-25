<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

Route::view('/','home')->name('home');
// Route::view('/events', 'events' )->name('events');
Route::get('/events', [EventsController::class, 'index'])->name('events');
// Route::get('/events/{id}', [EventsController::class, 'show']);
Route::get('/events/{event}', 'App\Http\Controllers\EventsController@show');



