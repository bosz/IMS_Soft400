﻿@extends('/back_end/blayout')

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
                       <a  href="#"><i class="fa fa-desktop fa-3x"></i><b>Inventory Management</b></a>
                       <ul style="list-style: none;">
                            <li>{{ HTML::link('/back_end/inventoryList', 'Inventory List', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/manageCategories', 'Manage Categories', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/manageAttributes', 'Manage Attributes', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                       </ul>
                       </li>
                   </li>
                   <li>
                       <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i><b> Sales </b></a>
                   </li>
					         <li>
                   <a  href="#"><i class="fa fa-desktop fa-3x"></i><b>Purchase/order</b></a>
                        <ul style="list-style: none;">
                             <li>{{ HTML::link('/back_end/makePurchase', 'Make Purchase', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                            <li>{{ HTML::link('/back_end/purchaseManagement', 'Purchase Management', 
                              array('class' => 'fa fa-forward fa-1x', 'style' => 'font-weight: bolder; text-decoration: none; 
                              font-size: 16px; color: white; padding: 10px;')) }}</li>
                        </ul>
                   </li>	
                     <li  >
                       <a  href="table.html"><i class="fa fa-table fa-3x"></i><b> Financial Reports </b></a>
                   </li>	
               </ul>
              
           </div>
           
       </nav>  
       <!-- /. NAV SIDE  -->
       <div id="page-wrapper" >
           <div id="accountinfo">
              <center><p><b><u>Account Information</u></b></p></center>
              <hr />
              <ul style="list-style: none;">
                <li>
                  <p>First Name: <b>&nbsp;&nbsp;&nbsp;@foreach($fname as $name)
                                     {{$name->fname}}
                                  @endforeach
                  (Status: Online)</b></p>
                </li>
                <li>
                  <p>Last Name: <b>&nbsp;&nbsp;&nbsp;@foreach($lname as $name)
                                     {{$name->lname}}
                                  @endforeach
                  (Status: Online)</b></p>
                </li>
                <li>
                  <p>Email Address: <b>@foreach($email as $mail)
                                     {{$mail->email}}
                                  @endforeach
                    </b></p>
                </li>
                <li>
                  <p>Phone Number:  <b>
                                    Fix Needed
                  </b></p>
                </li>
              </ul>
           </div>
           <div id="generalinfo">
              <center><p><b><u>General And Time Information</u></b></p></center>
              <hr />
              <ul style="list-style: none;">
                <li>
                  <p>Today's Date: <b>&nbsp;&nbsp;&nbsp;{{ date('d/m/y') }}
                  Time Zone (GMT + 01)</b></p>
                </li>
                <li>
                  <p>Last Login at: Fix Needed</p>
                </li>
                <li>
                  <p>Contact(Phone Number): Fix Needed</p>
                </li>
                <li>
                  <p>Descripion: <i><b>You are a verified user of the system</b></i></p>
                </li>
              </ul>
           </div>
           <hr />
           <div id="dashboard">
             
           </div>

       </div>
@stop