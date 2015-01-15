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

/*
Route::get('/login', function()
{
	return View::make('login');

});
*/

//route to show the login form
Route::get('login', array('uses' => 'LoginController@showLogin'));

//route to process the form
Route::post('login', array('uses' => 'LoginController@doLogin'));

//route to logout the user
Route::get('logout', array('uses' => 'LoginController@doLogout'));

Route::get('/user', function()
{
	return View::make('user');

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
    'uses' => 'RegistrationController@confirm'
]);*/