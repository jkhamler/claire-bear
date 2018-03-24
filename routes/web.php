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


/** Home Pages (about, contact, work) */
Route::get('/en', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::post('home/contact', 'HomeController@contact');
Route::get('/projects', 'ProjectController@index');


/** Project Routes - Add More Here */
Route::get('/project/jaeger', 'ProjectController@jaeger');
Route::get('/project/waterstones', 'ProjectController@waterstones');