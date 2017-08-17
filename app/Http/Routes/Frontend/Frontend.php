<?php

/**
 * Frontend Controllers
 */

Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('homepage', 'FrontendController@homepage')->name('frontend.homepage');
Route::get('event/list', 'FrontendController@event_list')->name('frontend.event.list');
Route::get('event/detail', 'FrontendController@event_detail')->name('frontend.event.detail');








Route::get('macros', 'FrontendController@macros')->name('frontend.macros');

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
    });
});