<?php

Route::group([], function() {
    Route::resource('student_message', 'StudentMessageController');
    Route::post('student_message_data', 'StudentMessageController@data')->name('admin.student_message.data');
});