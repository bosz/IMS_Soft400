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
                       <a class="active-menu"  href="{{URL::to('/back_end/user')}}"><i class="fa fa-dashboard fa-3x"></i> <b>Dashboard</b></a>
                   </li>
                    <li>
                       <a  href="#"><i class="fa fa-desktop fa-3x"></i><b>Inventory</b></a>
                       <ul style="list-style: none;">
                            <li>{{ HTML::link('/back_end/addProduct', 'Add Product', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/manageProduct', 'Manage Product', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                       </ul>
                       </li>
                   </li>
                   <li>
                       <a  href="#"><i class="fa fa-qrcode fa-3x"></i><b> Category </b></a>
                       <ul style="list-style: none;">
                            <li>{{ HTML::link('/back_end/addCategory', 'Add Category', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/manageCategory', 'Manage Category', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                       </ul>
                   </li>
					   <li  >
                       <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i><b> Purchase/Order </b></a>
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