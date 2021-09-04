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

Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home');
Route::get('/news', '\App\Http\Controllers\NewsController@index')->name('news');
Route::get('/shows', '\App\Http\Controllers\ShowsController@index')->name('shows');
Route::get('/songs', '\App\Http\Controllers\SongController@index')->name('songs');
Route::get('/gallery', '\App\Http\Controllers\GalleryController@index')->name('gallery');
Route::get('/contactus', '\App\Http\Controllers\ContactUsController@index')->name('contactus');

Route::get('/msongs', '\App\Http\Controllers\SongController@msongs')->name('msongs');