<?php

// For the demo, cheat and log the user in manually
$user = User::where('email', 'chris@caddis.co')->first();
Auth::login($user);

// Set up the routes
Route::get('/coderfaire', function()
{
	return '<h1 style="text-align: center; margin: 50px 0;">Welcome to Coderfaire</h1>';
});

Route::get('/', 'IndexController@index');

Route::get('/doctors', 'DoctorController@index');
Route::get('/companions', 'CompanionController@index');
Route::get('/enemies', 'EnemyController@index');
Route::get('/episodes', 'EpisodeController@index');

Route::get('/doctor/{id}', 'DoctorController@get');
Route::get('/companion/{id}', 'CompanionController@get');
Route::get('/enemy/{id}', 'EnemyController@get');
Route::get('/episode/{season}/{show}', 'EpisodeController@get');

Route::post('/comment', 'CommentController@post');
