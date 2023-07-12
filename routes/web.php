<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});
Route::get('homepage', 'App\Http\Controllers\HomepageController@homepage');

Route::get('subscribe', 'App\Http\Controllers\SubscribeController@subscribe_form');
Route::post('subscribe', 'App\Http\Controllers\SubscribeController@subscribe_ok');
Route::post('user_search', 'App\Http\Controllers\Subscribe_back_Controller@username_ok');
Route::post('email_search', 'App\Http\Controllers\Subscribe_back_Controller@email_ok');

Route::get('login', 'App\Http\Controllers\LoginController@login_form');
Route::post('login', 'App\Http\Controllers\LoginController@login_ok');

Route::get('logout', 'App\Http\Controllers\LogoutController@logout_page');

Route::get('profile', 'App\Http\Controllers\ProfileController@profile');
Route::get('foundbook', 'App\Http\Controllers\FoundbookController@foundbook');
Route::get('insertbook', 'App\Http\Controllers\InsertbookController@insert_provincie');
Route::post('insert_book', 'App\Http\Controllers\InsertbookController@insert_book');
Route::post('found_book', 'App\Http\Controllers\FoundbookController@book_by_id');
Route::post('insert_found_book', 'App\Http\Controllers\FoundbookController@update_db');
Route::get('release_book/{id}/{where}/{provincia}', 'App\Http\Controllers\ProfileController@release_book');
Route::get('searchbookbyzone/{place}', 'App\Http\Controllers\ProfileController@search_book');
Route::get('tracking/{id}', 'App\Http\Controllers\TrackingController@trace_book');
Route::get('searchzone/{provincia}', 'App\Http\Controllers\InsertbookController@search_zone');
