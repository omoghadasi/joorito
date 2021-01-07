<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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
Route::prefix('admin')->group(function (){
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/profile', 'UserController@show')->name('profile');
    Route::put('/profile/update', 'UserController@edit')->name('profile_update');
    Route::get('/setting', 'HomeController@setting')->name('setting');
    Route::resource('sites','SiteController')->except(['show']);
});
Route::get('/', 'searchController@showPage')->name('index');
Route::get('/results', 'resultsController@showPage')->name('results');
Route::get('/categories', 'categoriesController@showPage')->name('categories');
Route::get('/statistics', 'statisticsController@showPage')->name('statistics');

Route::get('/dev','HomeController@checklinks')->name('checklinks')->middleware('auth');


