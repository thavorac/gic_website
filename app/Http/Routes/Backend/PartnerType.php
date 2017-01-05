<?php

Route::group([], function() {
    Route::resource('partner_type', 'PartnerTypeController');
    Route::post('partner_type_data', 'PartnerTypeController@data')->name('admin.partner_type.data');
});