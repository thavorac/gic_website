<?php

/**
 * Frontend Controllers
 */

Route::get('/', 'FrontendController@index')->name('frontend.index');


<<<<<<< 7eb2e3ed803c0c26a9e5753312d2a4240b069e16
Route::get('List/I3', 'FrontendController@Student_List_I3')->name('frontend.Student_List_I3');
Route::get('List/I4', 'FrontendController@Student_List_I4')->name('frontend.Student_List_I4');
=======

Route::get('mission-main', 'FrontendController@mission_main')->name('frontend.mission.main');
Route::get('mission-detail', 'FrontendController@mission_detail')->name('frontend.mission.detail');


Route::get('homepage', 'FrontendController@homepage')->name('frontend.homepage');
>>>>>>> update Mission and bootstrap



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