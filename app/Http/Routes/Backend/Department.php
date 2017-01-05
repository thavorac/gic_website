<?php

Route::group([], function() {
    Route::resource('department', 'DepartmentController');
    Route::post('department_data', 'DepartmentController@data')->name('admin.department.data');
});