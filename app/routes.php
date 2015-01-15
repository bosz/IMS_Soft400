<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/layout', function(){
	return View::make('layout');
});

Route::get('/signup', function()
{
	return View::make('signup');

});

Route::get('/login', function()
{
	return View::make('login');

});

Route::get('/restpasswd', function()
{
	return View::make('restpasswd');

});

Route::post('/register_action', function()
{
        $obj = new RegisterController() ;
        return $obj->store();
});

/*Route::get('signup/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegisterController@confirm'
]);*/