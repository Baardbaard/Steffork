<?php

// Auth
Route::auth();

Route::get('/', function () {
    return view('auth/login');
});


// Reviews
Route::get('reviews', ['as' => 'reviews', 'uses' => 'ReviewsController@index']);
Route::get('reviews/create', 'ReviewsController@create');
Route::get('reviews/{review}', 'ReviewsController@show');
Route::get('reviews/{review}/edit', 'ReviewsController@edit');

Route::post('reviews/create', 'ReviewsController@store');
Route::put('reviews/{review}', 'ReviewsController@update');

Route::delete('reviews/{review}', 'ReviewsController@destroy');

