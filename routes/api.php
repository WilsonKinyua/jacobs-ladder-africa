<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Users
    Route::apiResource('users', 'UsersApiController');

    // Registered Users
    Route::apiResource('registered-users', 'RegisteredUsersApiController');

    // Contact Us
    Route::post('contactuses/media', 'ContactUsApiController@storeMedia')->name('contactuses.storeMedia');
    Route::apiResource('contactuses', 'ContactUsApiController');

    // What We Do
    Route::post('what-we-dos/media', 'WhatWeDoApiController@storeMedia')->name('what-we-dos.storeMedia');
    Route::apiResource('what-we-dos', 'WhatWeDoApiController');
});
