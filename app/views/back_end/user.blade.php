@extends('/back_end/blayout')

@section('title')
    <title>User Page - IMS_Soft400</title>
@stop          

@section('content')
 <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
           <div class="sidebar-collapse">
               <ul class="nav" id="main-menu">
			<li class="text-center">
                   <img src="{{ asset('assets/img/find_user.png') }}" class="user-image img-responsive"/>
				</li>
			
				
                   <li>
                       <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> <b>Dashboard</b></a>
                   </li>
                    <li>
                       <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> <b>Inventory Management</b></a>
                   </li>
                   <li>
                       <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i><b> Sales </b></a>
                   </li>
					   <li  >
                       <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i><b> Purchase </b></a>
                   </li>	
                     <li  >
                       <a  href="table.html"><i class="fa fa-table fa-3x"></i><b> Financial Reports </b></a>
                   </li>	
               </ul>
              
           </div>
           
       </nav>  
       <!-- /. NAV SIDE  -->
       <div id="page-wrapper" >
           
       </div>
@stop