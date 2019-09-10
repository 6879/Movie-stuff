<!DOCTYPE html>
<html lang="bn">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Aug 2019 18:13:54 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Movies&stuff</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{URL::asset('frontendadmin/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('frontendadmin/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="{{URL::asset('frontendadmin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{URL::asset('frontendadmin/plugins/summernote/summernote.css')}}" rel="stylesheet">
	<!-- morris chart -->
    <link href="{{URL::asset('frontendadmin/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{URL::asset('frontendadmin/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('frontendadmin/css/material_style.css')}}">
	<!-- animation -->
	<link href="{{URL::asset('frontendadmin/css/pages/animate_page.css')}}" rel="stylesheet">
	<!-- Template Styles -->
    <link href="{{URL::asset('frontendadmin/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('frontendadmin/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('frontendadmin/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('frontendadmin/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" /> 
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="{{ URL::to ('/')}}">
                    <img alt="" src="assets/img/logo.png">
                    <span class="logo-default" >Movies&stuff</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn search-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                      
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile">Al Amin </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i> Log Out </a>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                               
                                       
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                
	                                <span class="title">Movie</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{ URL::to ('admin/addtrailer')}}" class="nav-link ">
	                                        <span class="title">Add Trailer</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{ URL::to ('admin/allMovieTrailers')}}" class="nav-link ">
	                                        <span class="title">View Trailer</span>
	                                    </a>
	                                </li>
	                               
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                               
	                                <span class="title">Tv shows</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="{{ URL::to ('admin/addtvshows')}}" class="nav-link ">
	                                        <span class="title">Add Tv shows</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="{{ URL::to ('admin/alltvshows')}}" class="nav-link ">
	                                        <span class="title">View Tv shows</span>
	                                    </a>
	                                </li>
	                               
	                            </ul>
	                        </li>
	                       
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
             @yield('content') 
              @include('admin/inc/footer')