<?php

Route::group([], function() {
    Route::resource('room_lab', 'RoomLabController');
    Route::post('room_lab_data', 'RoomLabController@data')->name('admin.room_lab.data');
});