<?php

Route::group([], function() {
    Route::resource('scholarship', 'ScholarshipController');
    Route::post('scholarship_data', 'ScholarshipController@data')->name('admin.scholarship.data');
});