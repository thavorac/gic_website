<?php

Route::group([], function() {
    Route::resource('academic_year', 'AcademicYearController');
    Route::post('academic_year_data', 'AcademicYearController@data')->name('admin.academic_year.data');
});