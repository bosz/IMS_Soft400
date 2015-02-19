<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @yield('title');

	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{ asset('assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans') }}" rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{ HTML::link('/back_end/user', 'IMS Soft400', array('class' => 'navbar-brand'))}} 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">{{ HTML::link('/logout', 'Logout', array('class' => 'btn btn-info'))}} </div>
        </nav> 

        @yield('content');

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{ asset('assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/morris/morris.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>  