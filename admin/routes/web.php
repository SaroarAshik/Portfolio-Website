<?php




// Route::get('/', function () {
//     return view('home');
// });



Route::get('/', 'HomeController@HomeIndex');

Route::get('/visitor', 'VisitorController@VisitorIndex');

Route::get('/service', 'ServiceController@ServiceIndex');
Route::get('/getServicesData', 'ServiceController@getServiceData');
Route::post('/ServiceDetails', 'ServiceController@getServiceDetails');
Route::post('/ServiceUpdate', 'ServiceController@ServiceUpdate');
Route::post('/ServiceDelete', 'ServiceController@ServiceDelete');
Route::post('/ServiceAdd', 'ServiceController@ServiceAdd');