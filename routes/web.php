<?php

// Render homepage
//Route::get('/', 'HomeController@index');
Route::get('/', function(){
    \Mail::to('andrewjamesbibby@hotmail.com')->send(new \App\Mail\enquiry('fgadf', 'adfg@hhh','fgsfgjsfg'));
});

// Process contact form
Route::post('contact', 'HomeController@contact');

// Portfolio pages
Route::get('portfolio/{project}', 'HomeController@portfolio');
