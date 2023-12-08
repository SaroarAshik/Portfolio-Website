<?php


// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', 'HomeController@HomeIndex');
Route::get('/visitor', 'VisitorController@VisitorIndex');

//Admin panel services
Route::get('/service', 'ServiceController@ServiceIndex');
Route::get('/getServicesData', 'ServiceController@getServiceData');
Route::post('/ServiceDetails', 'ServiceController@getServiceDetails');
Route::post('/ServiceUpdate', 'ServiceController@ServiceUpdate');
Route::post('/ServiceDelete', 'ServiceController@ServiceDelete');
Route::post('/ServiceAdd', 'ServiceController@ServiceAdd');

//Admin Panel Courses
Route::get('/courses', 'CoursesController@CoursesIndex');
Route::get('/getCoursesData', 'CoursesController@getCoursesData');
Route::post('/CoursesDelete', 'CoursesController@CoursesDelete');
Route::post('/CoursesDetails', 'CoursesController@getCoursesDetails');
Route::post('/CoursesUpdate', 'CoursesController@CoursesUpdate');
Route::post('/CoursesAdd', 'CoursesController@CoursesAdd');

// Admin Panel Projects
Route::get('/Project', 'ProjectController@ProjectIndex');
Route::get('/getProjectData', 'ProjectController@getProjectData');
Route::post('/ProjectDetails', 'ProjectController@getProjectDetails');
Route::post('/ProjectDelete', 'ProjectController@ProjectDelete');
Route::post('/ProjectUpdate', 'ProjectController@ProjectUpdate');
Route::post('/ProjectAdd', 'ProjectController@ProjectAdd');


// Admin Panel Contact
Route::get('/Contact', 'ContactController@ContactIndex');
Route::get('/getContactData', 'ContactController@getContactData');
Route::post('/ContactDelete', 'ContactController@ContactDelete');