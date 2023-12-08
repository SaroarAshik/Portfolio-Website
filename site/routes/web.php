<?php


// Route::get('/', function (){
//     return view('home');
// });


Route::get('/', 'HomeController@HomeIndex');

Route::post('/contactSend', 'HomeController@ContactSend');