<?php

/**
 * Academic Controllers
 */

// Academic

Route::get('about', 'AcademicController@about')->name('frontend.academic.about');
Route::get('courses', 'AcademicController@list_courses')->name('frontend.academic.list_courses');
Route::get('course/{id}', 'AcademicController@course')->name('frontend.academic.course');
Route::get('timetable/{year}', 'AcademicController@timetable')->name('frontend.academic.time_table');
Route::get('students/{promotion}', 'AcademicController@list_students')->name('frontend.academic.list_students');
Route::get('student/{id}', 'AcademicController@student')->name('frontend.academic.student');
Route::get('scholarships', 'AcademicController@scholarships')->name('frontend.academic.list_scholarships');
Route::get('scholarship_winners', 'AcademicController@scholarship_winners')->name('frontend.academic.list_scholarship_winners');
Route::get('programs', 'AcademicController@programs')->name('frontend.academic.list_programs');
Route::get('missions', 'AcademicController@missions')->name('frontend.academic.list_missions');