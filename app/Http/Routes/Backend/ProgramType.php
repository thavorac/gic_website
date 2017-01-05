<?php

Route::group([], function() {
    Route::resource('program_type', 'ProgramTypeController');
    Route::post('program_type_data', 'ProgramTypeController@data')->name('admin.program_type.data');
});