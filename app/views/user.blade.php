@extends('layout')

@section('title')
	<title>User Page - IMS_Soft400</title>
@stop

@section('button')
	<li class="active">{{ HTML::link('logout', 'LOG OUT', array('class' => 'btn')) }}</a></li>
@stop

@section('content')
	<h1><u>Welcome to the Dash Board</u></h1>

@stop