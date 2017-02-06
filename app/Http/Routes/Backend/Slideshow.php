<?php

Route::group([], function() {
    Route::resource('slideshow', 'SlideShowController');
    Route::post('slideshow_data', 'SlideShowController@data')->name('admin.slideshow.data');

});