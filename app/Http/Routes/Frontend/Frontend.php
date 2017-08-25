<?php

Route::get('/', 'FrontendController@index')->name('frontend.index');


Route::get('List/I3', 'FrontendController@Student_List_I3')->name('frontend.Student_List_I3');
Route::get('List/I4', 'FrontendController@Student_List_I4')->name('frontend.Student_List_I4');
Route::get('mission-main', 'FrontendController@mission_main')->name('frontend.mission.main');
Route::get('mission-detail', 'FrontendController@mission_detail')->name('frontend.mission.detail');
Route::get('homepage', 'FrontendController@homepage')->name('frontend.homepage');
Route::get('event/list', 'FrontendController@event_list')->name('frontend.event.list');
Route::get('homepage', 'FrontendController@homepage')->name('frontend.homepage');
Route::get('event/detail', 'FrontendController@event_detail')->name('frontend.event.detail');
Route::get('staff_detial-introduct', 'FrontendController@staff_detial_introduct')->name('frontend.staff_detial-introduct');
Route::get('staff_detial-presentation', 'FrontendController@staff_detial_presentation')->name('frontend.staff_detial-presentation');
Route::get('staff_detial-project_to_research', 'FrontendController@staff_detial_project_to_research')->name('frontend.staff_detial-project_to_research');
Route::get('staff_detial-publications', 'FrontendController@staff_detial_publications')->name('frontend.staff_detial-publications');
Route::get('staff_detial-activite', 'FrontendController@staff_detial_activite')->name('frontend.staff_detial-activite');
Route::get('staff_detial-course', 'FrontendController@staff_detial_course')->name('frontend.staff_detial-course');
Route::get('department', 'FrontendController@department')->name('frontend.department');
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