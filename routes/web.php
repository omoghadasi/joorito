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

Route::get('/', 'searchController@showPage');
Route::get('/results', 'resultsController@showPage');
Route::get('/categories', 'categoriesController@showPage');
Route::get('/statistics', 'statisticsController@showPage');

Route::get('/login', function () {
    return view('loginPage');
});

Route::get('/register', function () {
    return view('registerPage');
});
Route::get('/dev', function () {
    return view('test');
});
