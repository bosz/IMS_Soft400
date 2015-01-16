@extends('layout')

@section('title')
	<title>User Page - IMS_Soft400</title>
@stop

@section('content')
	<h1>Welcome User</h1>

	<a href="{{ URL::to('logout') }}">Logout</a>

@stop