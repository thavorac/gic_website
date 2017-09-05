<?php

Route::get('/get', 'StudentApiController@get')->name("students.get");
Route::get('/search', 'StudentApiController@search')->name("students.search");