<?php

// News & Events

Route::get('list_news', 'NewsAndEventController@list_news')->name('frontend.list_news');
Route::get('news/{id}', 'NewsAndEventController@news')->name('frontend.news');
Route::get('events', 'NewsAndEventController@list_events')->name('frontend.list_events');
Route::get('event/{id}', 'NewsAndEventController@event')->name('frontend.event');
Route::get('student_messages', 'NewsAndEventController@student_messages')->name('frontend.list_student_messages');
Route::get('blogs', 'NewsAndEventController@list_blogs')->name('frontend.list_blogs');
Route::get('blog/{id}', 'NewsAndEventController@blog')->name('frontend.blog');