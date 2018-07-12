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
    return view('omarkHealth.healthHome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/healthHome', 'HealthController@index')->name('healthHome');
Route::get('/healthgallery', 'HealthController@gallery')->name('gallery');
Route::get('/omarkgallery2', 'OmarkController@gallery2')->name('gallery2');
Route::get('/omarkgallery3', 'OmarkController@gallery3')->name('gallery3');

Route::get('/contact', 'HealthController@contact')->name('contact');


Route::get('/seondaryGallery', 'OmarkController@index')->name('secondaryGallery');