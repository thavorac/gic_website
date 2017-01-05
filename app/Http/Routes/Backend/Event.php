<?php

Route::group([], function() {
    Route::resource('event', 'EventController');
    Route::post('event_data', 'EventController@data')->name('admin.event.data');
});