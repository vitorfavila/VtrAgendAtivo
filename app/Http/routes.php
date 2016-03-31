<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');

    Route::group(['middleware' => 'auth'], function() {
        Route::get('/aaa', function() {
            return "aaaagia";
        });
    });
});
