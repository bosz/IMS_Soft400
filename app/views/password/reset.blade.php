@extends('layout')

@section('title')
	<title>Reset - IMS_Soft400</title>
@stop

@section('content')
	
	<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Reset Password</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">

						@if (Session::has('error'))
  							{{ trans(Session::get('reason')) }}
						@endif
							
							{{ Form::open(array('route' => array('password.update', $token))) }}
								<div class="top-margin">
									<label>Username/Email <span class="text-danger">*</span></label>
									{{ Form::text('email', Input::old('email'), array('placeholder'=>'e.g. example@domain.com',
									 'class' => 'form-control')) }}
								</div>

								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									{{ Form::password('password', array('placeholder'=>'Password',
									 'class' => 'form-control')) }}
								</div>

								<div class="top-margin">
									<label>Confirm Password <span class="text-danger">*</span></label>
									{{ Form::password('cpassword', array('placeholder'=>'Password',
									 'class' => 'form-control')) }}
								</div>

								{{ Form::hidden('token', $token) }}

								<hr>

								<div class="row">
									<div class="col-lg-5 text-right pull-right">
										{{ Form::submit('Submit', array('class' => 'btn btn-action')) }}
									</div>
								</div>
							{{ Form::close() }}
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>

@stop