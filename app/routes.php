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

Route::get('/remind', function()
{
	return View::make('remind');

});

Route::post('/register_action', function()
{
        $obj = new RegisterController() ;
        return $obj->store();
});


//creating the reminder form
Route::get('password/rest', array(
		'uses' => 'PasswordController@remind',
		'as' => 'password.remind'
));

//sending the request email
Route::post('password/rest', array(
		'uses' => 'PasswordController@request',
		'as' => 'password.request'
));

//creating a reset form
Route::get('password/reset/{token}', array(
  'uses' => 'PasswordController@reset',
  'as' => 'password.reset'
));

//updating the password
Route::post('password/reset/{token}', array(
  'uses' => 'PasswordController@update'
));


/*Route::get('signup/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegisterController@confirm'
]);*/