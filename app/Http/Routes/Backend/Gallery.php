<?php

Route::group([], function() {
    Route::resource('gallery', 'GalleryController');
    Route::post('gallery_data', 'GalleryController@data')->name('admin.gallery.data');
});