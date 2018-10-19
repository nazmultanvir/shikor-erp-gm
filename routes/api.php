<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Product Routes
Route::apiResource('/products', 'ProductsController');

//Review ROutes
Route::group(['prefix' => 'products'], function () {
    Route::apiResource('/{product}/reviews', 'ReviewsController');
});
