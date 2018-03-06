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

Route::get('/', 'HomeController@index');

Route::get('/about', 'HomeController@about');

Route::get('/contact', 'HomeController@contact');

Route::get('/work', 'HomeController@work');


/** Project Routes - Add More Here */
Route::get('/project/jaeger', 'Projectontroller@jaeger');
Route::get('/project/waterstones', 'Projectontroller@waterstones');