<?php

Route::group([], function() {
    Route::resource('project', 'ProjectController');
    Route::post('project_data', 'ProjectController@data')->name('admin.project.data');
});