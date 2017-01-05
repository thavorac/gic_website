<?php

Route::group([], function() {
    Route::resource('course', 'CourseController');
    Route::post('course_data', 'CourseController@data')->name('admin.course.data');
});