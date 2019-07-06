<?php


Route::post('/auth/token', 'Auth\Api\AuthController@getAccessToken');
Route::post('/auth/reset-password', 'Auth\Api\AuthController@passwordResetRequest');
Route::post('/auth/change-password', 'Auth\Api\AuthController@changePassword');

Route::group(['middleware' => 'auth:api', 'namespace' => 'blog\Api'], function() {
    Route::get('/tags', 'ListingController@tags');
    Route::get('/categories', 'ListingController@categories');
    Route::get('/users', 'ListingController@users')->middleware('admin');

    Route::resource('/posts', 'PostController', ['only' => ['index', 'show']]);
});
