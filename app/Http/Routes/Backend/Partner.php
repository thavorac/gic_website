<?php

Route::group([], function() {
    Route::resource('partner', 'PartnerController');
    Route::post('partner_data', 'PartnerController@data')->name('admin.partner.data');
});