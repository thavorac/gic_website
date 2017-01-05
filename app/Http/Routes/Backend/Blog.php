<?php

Route::group([], function() {
    Route::resource('blog', 'BlogController');
    Route::post('blog_data', 'BlogController@data')->name('admin.blog.data');
});