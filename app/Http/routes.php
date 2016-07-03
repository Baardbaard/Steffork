<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    /* return view('pages.home'); */
});

/* Route::get('/about', 'PagesController@home'); */

/* Route::get('/', 'ReviewsController@index'); */

Route::auth();

/* Route::get('/', function() { */
/*     return view('home'); */
/* }); */

Route::get('reviews', 'ReviewsController@index');
Route::get('reviews/{review}', 'ReviewsController@show');
Route::post('reviews', 'ReviewsController@store');

/* Route::get('reviews/create', 'ReviewsController@create'); */
/* Route::put('reviews/1', 'ReviewsController@update'); */
/* Route::post('reviews/1/edit', 'ReviewsController@edit'); */
/* Route::delete('reviews/1', 'ReviewsController@destroy'); */
