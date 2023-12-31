<?php


// Route::get('/', function (){
//     return view('home');
// });


Route::get('/', 'HomeController@HomeIndex');

Route::post('/contactSend', 'HomeController@ContactSend');


Route::get('/Courses', 'CoursesController@CoursePage');
Route::get('/Projects', 'ProjectsController@ProjectPage');
Route::get('/Policy', 'PolicyController@PolicyPage');
Route::get('/Terms', 'TermsController@TermPage');
Route::get('/Contact', 'ContactController@ContactPage');