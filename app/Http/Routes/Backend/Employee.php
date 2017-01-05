<?php

Route::group([], function() {
    Route::resource('employee', 'EmployeeController');
    Route::post('employee_data', 'EmployeeController@data')->name('admin.employee.data');
});