<?php

Route::group([], function() {
    Route::resource('news', 'NewsController');
    Route::post('news_data', 'NewsController@data')->name('admin.news.data');
});