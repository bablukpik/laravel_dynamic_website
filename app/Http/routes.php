<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
	Route::resource('reg', 'PhotoController') or Route::post('reg', 'PhotoController'); // When user request to send data for insert, update, delete
	Route::get('/home', 'HomeController@index'); //When user request a page 
*/

Route::get('/', function () {
	return view('mywebsite.index');
    //return view('welcome');
});

Route::get('index', function () {
    return view('mywebsite.index');
});

Route::get('games', function () {
    return view('mywebsite.games');
});

Route::get('blog', function () {
    return view('mywebsite.blog');
});

Route::get('features', function () {
    return view('mywebsite.features');
});

Route::get('contact', function () {
    return view('mywebsite.contact');
});


