<?php

Route::group([], function() {
    Route::resource('useful_link', 'UsefulLinkController');
    Route::post('useful_link_data', 'UsefulLinkController@data')->name('admin.useful_link.data');
});