<?php

// Research & Development

Route::get('projects', 'ResearchAndDevelopmentController@list_projects')->name('frontend.research_development.list_projects');
Route::get('project/{id}', 'ResearchAndDevelopmentController@project')->name('frontend.research_development.project');
Route::get('partners', 'ResearchAndDevelopmentController@list_partners')->name('frontend.research_development.list_partners');
Route::get('partner/{id}', 'ResearchAndDevelopmentController@partner')->name('frontend.research_development.partner');