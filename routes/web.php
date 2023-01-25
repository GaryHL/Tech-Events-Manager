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

Route::get('/', function () {
    return view('welcome');
});




Route::get('home',[EventsController::class,'index']);


Route::get('profile',[EventsController::class,'indexProfile']);

Route::get('event/show/',[EventsController::class,'show']);

Route::post('/event/post',[EventsController::class,'store']);

Route::put('/event/update/{id}',[EventsController::class,'update']);

Route::get('/home2',[EventsController::class,'index']);
Route::post('/home/update/{id}',[EventsController::class,'store']);


//USERS
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);