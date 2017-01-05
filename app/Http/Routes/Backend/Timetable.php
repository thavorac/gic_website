<?php

Route::group([], function() {
    Route::resource('timetable', 'TimetableController');
    Route::post('timetable_data', 'TimetableController@data')->name('admin.timetable.data');
});