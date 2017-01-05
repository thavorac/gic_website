<?php

Route::group([], function() {
    Route::resource('scholarship_winner', 'ScholarshipWinnerController');
    Route::post('scholarship_winner_data', 'ScholarshipWinnerController@data')->name('admin.scholarship_winner.data');
});