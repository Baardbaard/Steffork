<?php

// Auth
Route::auth();

// Reviews
Route::get('reviews', ['as' => 'reviews', 'uses' => 'ReviewsController@index']);
Route::get('reviews/{review}', 'ReviewsController@show');
Route::get('reviews/{review}/edit', 'ReviewsController@edit');

Route::post('reviews', 'ReviewsController@store');
Route::put('reviews/{review}', 'ReviewsController@update');

Route::delete('reviews/{review}', 'ReviewsController@destroy');
