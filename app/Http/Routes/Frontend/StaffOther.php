<?php

// Staff & Other
Route::get('staffs', 'StaffAndOtherController@list_staffs')->name('frontend.list_staffs');
Route::get('staff/{id}', 'StaffAndOtherController@staff')->name('frontend.staff');
Route::get('useful_links', 'StaffAndOtherController@useful_links')->name('frontend.useful_links');
Route::get('gallery', 'StaffAndOtherController@gallery')->name('frontend.gallery');
Route::get('room_labs', 'StaffAndOtherController@room_labs')->name('frontend.room_labs');