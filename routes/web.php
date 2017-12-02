<?php

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

Auth::routes();

Route::get('/home', 'TrackController@index')->name('home');

Route::resource('tracks', 'TrackController');

// Route::resource('tracks/{id}','TrackController');

Route::post('/tracks/newTrack','TrackController@newTrack');
