<?php

// Render homepage
Route::get('/', 'HomeController@index');

// Process contact form
Route::post('contact', 'HomeController@contact');

// Portfolio pages
Route::get('portfolio/{project}', 'HomeController@portfolio');
