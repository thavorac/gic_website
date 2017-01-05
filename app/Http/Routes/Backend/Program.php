<?php

Route::group([], function() {
    Route::resource('program', 'ProgramController');
    Route::post('program_data', 'ProgramController@data')->name('admin.program.data');
});