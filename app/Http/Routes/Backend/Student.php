<?php

Route::group([], function() {
    Route::resource('student', 'StudentController');
    Route::post('student_data', 'StudentController@data')->name('admin.student.data');
});