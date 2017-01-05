<?php

Route::group([], function() {
    Route::resource('mission', 'MissionController');
    Route::post('mission_data', 'MissionController@data')->name('admin.mission.data');
});