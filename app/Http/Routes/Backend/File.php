<?php

Route::group([], function() {
    Route::resource('file', 'FileController');
    Route::post('file_data', 'FileController@data')->name('admin.file.data');
    Route::get('get_files', 'FileController@get_files')->name('admin.file.get_files');
});