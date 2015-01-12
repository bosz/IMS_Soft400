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
	return View::make('hello');
});

<<<<<<< HEAD
Route::get('/index', function(){
	return View::make('index');
});

Route::get('/layout', function(){
	return View::make('layout');
=======
Route::get('/signup', function()
{
	return View::make('signup');
<<<<<<< HEAD
>>>>>>> 37b68fc0a291c6bc9aec3757cda2c7ebcf07c4aa
=======
});

Route::get('/login', function()
{
	return View::make('login');
>>>>>>> cf85b8d3b806b765a7fb61d676fa06bd8361a34c
});