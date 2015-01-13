@extends('layout')

@section('title')
	<title>LogIn - IMS_Soft400</title>
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
							
							<form>
								<div class="top-margin">
									<label>Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-5 text-right pull-right">
										<button class="btn btn-action" type="submit">Reset Password</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>

@stop