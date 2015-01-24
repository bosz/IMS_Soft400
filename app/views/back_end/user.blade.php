@extends('layout')

@section('title')
	<title>User Page - IMS_Soft400</title>
@stop

@section('button')
	<li class="active">{{ HTML::link('logout', 'LOG OUT', array('class' => 'btn')) }}</a></li>
@stop

@section('content')
	<h1><u>Welcome </u>
	@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{ Session::get('email', '') }} !</strong>
		</div>
	@endif
	</h1>
@stop