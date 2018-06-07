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
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::post('home/contact', 'HomeController@contact');
Route::get('projects', 'ProjectController@index');


/** Project Routes - Add More Here */

Route::prefix('project')->group(function () {

    Route::get('/allude', 'ProjectController@allude');
    Route::get('/bmm', 'ProjectController@bmm');
    Route::get('/curraghs', 'ProjectController@curraghs');
    Route::get('/fa-england', 'ProjectController@faEngland');
    Route::get('/girl-in-a-blue-dress', 'ProjectController@girlInABlueDress');
    Route::get('/history-of-magic', 'ProjectController@historyOfMagic');
    Route::get('/horniman', 'ProjectController@horniman');
    Route::get('/london-transport-museum', 'ProjectController@londonTransportMuseum');
    Route::get('/metamorphosis', 'ProjectController@metamorphosis');
    Route::get('/nt-biddulph', 'ProjectController@ntBiddulph');
    Route::get('/nt-nostell', 'ProjectController@ntNostell');
    Route::get('/rmg', 'ProjectController@rmg');
    Route::get('/valentino', 'ProjectController@valentino');
    Route::get('/viridor', 'ProjectController@viridor');

});


