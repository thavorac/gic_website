<?php

Route::group([], function() {
    Route::resource('file', 'FileController');
    Route::post('file_data', 'FileController@data')->name('admin.file.data');
});