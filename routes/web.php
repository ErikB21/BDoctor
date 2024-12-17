<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Route::resource('profile', 'UserController');
    Route::get('/index', 'UserController@index')->name('index');
    Route::get('/edit', 'UserController@edit')->name('edit');
    Route::put('/update', 'UserController@update')->name('update');
    Route::delete('/destroy', 'UserController@destroy')->name('destroy');
    Route::resource('messages', 'MessageController');
    Route::resource('reviews', 'ReviewController');
    Route::resource('sponsorship', 'SponsorshipController');

});

Route::get("{any?}", function() {
    return view("guest.home");
})->where("any", ".*");





