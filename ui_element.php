<!DOCTYPE html>
<!-- saved from url=(0049)http://endlesstheme.com/Perfect_Admin/button.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Perfect Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Pace -->
	<link href="assets/pace.css" rel="stylesheet">
	
	<!-- Perfect -->
	<link href="assets/app.min.css" rel="stylesheet">
	<link href="assets/app-skin.css" rel="stylesheet">
	
  </head>

  <body style=""><div id="logoutConfirm_background" class="popup_background" style="opacity: 0; visibility: hidden; background-color: black; position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 2000; transition: all 0.3s;"></div><div id="logoutConfirm_wrapper" class="popup_wrapper" style="opacity: 0; visibility: hidden; position: fixed; overflow: auto; z-index: 2001; transition: all 0.3s; top: 0px; right: 0px; left: 0px; bottom: 0px; text-align: center; display: none;"><div class="custom-popup width-100 popup_content" id="logoutConfirm" data-popup-initialized="true" aria-hidden="true" role="dialog" aria-labelledby="open_23576207" style="opacity: 0; visibility: hidden; display: inline-block; outline: none; transition: all 0.3s; text-align: left; position: relative; vertical-align: middle;">
		<div class="padding-md">
			<h4 class="m-top-none"> Do you want to logout?</h4>
		</div>

		<div class="text-center">
			<a class="btn btn-success m-right-sm" href="login.html">Logout</a>
			<a class="btn btn-danger logoutConfirm_close">Cancel</a>
		</div>
	</div><div class="popup_align" style="display: inline-block; vertical-align: middle; height: 100%;"></div></div>
	<!-- Overlay Div -->
	<div id="overlay" class="transparent" style="opacity: 1;"></div>

	<a href="button.html" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
	<div id="theme-setting">
		<div class="title">
			<strong class="no-margin">Skin Color</strong>
		</div>
		<div class="theme-box">
			<a class="theme-color" style="background:#323447" id="default"></a>
			<a class="theme-color" style="background:#efefef" id="skin-1"></a>
			<a class="theme-color" style="background:#a93922" id="skin-2"></a>
			<a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
			<a class="theme-color" style="background:#635247" id="skin-4"></a>
			<a class="theme-color" style="background:#3a3a3a" id="skin-5"></a>
			<a class="theme-color" style="background:#495B6C" id="skin-6"></a>
		</div>
		<div class="title">
			<strong class="no-margin">Sidebar Menu</strong>
		</div>
		<div class="theme-box">
			<label class="label-checkbox">
				<input type="checkbox" checked="" id="fixedSidebar">
				<span class="custom-checkbox"></span>
				Fixed Sidebar
			</label>
		</div>
	</div><!-- /theme-setting -->
	
	<div id="wrapper" class="">
		<div id="top-nav" class="skin-6 fixed">
			<div class="brand">
				<span>Perfect</span>
				<span class="text-toggle"> Admin</span>
			</div><!-- /brand -->
			<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<button type="button" class="navbar-toggle pull-left hide-menu" id="menuToggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav-notification clearfix">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="button.html#">
						<i class="fa fa-envelope fa-lg"></i>
						<span class="notification-label bounceIn animation-delay4">7</span>
					</a>
					<ul class="dropdown-menu message dropdown-1">
						<li><a>You have 4 new unread messages</a></li>					  
						<li>
							<a class="clearfix" href="button.html#">
								<img src="assets/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>John Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-check text-success"></i> 27m ago</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="button.html#">
								<img src="assets/user2.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Jane Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-check text-success"></i> 5hr ago</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="button.html#">
								<img src="assets/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Bill Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-reply"></i> Yesterday</small>
								</div>
							</a>	
						</li>
						<li>
							<a class="clearfix" href="button.html#">
								<img src="assets/user2.jpg" alt="User Avatar">
								<div class="detail">
									<strong>Baby Doe</strong>
									<p class="no-margin">
										Lorem ipsum dolor sit amet...
									</p>
									<small class="text-muted"><i class="fa fa-reply"></i> 9 Feb 2013</small>
								</div>
							</a>	
						</li>
						<li><a href="button.html#">View all messages</a></li>					  
					</ul>
				</li>
				<li class="dropdown hidden-xs">
					<a href="button.html#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-tasks fa-lg"></i>
						<span class="notification-label bounceIn animation-delay5">4</span>
					</a>
					<ul class="dropdown-menu task dropdown-2">
						<li><a href="button.html#">You have 4 tasks to complete</a></li>					  
						<li>
							<a href="button.html#">
								<div class="clearfix">
									<span class="pull-left">Bug Fixes</span>
									<small class="pull-right text-muted">78%</small>
								</div>
								<div class="progress">
									<div class="progress-bar" style="width:78%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="button.html#">
								<div class="clearfix">
									<span class="pull-left">Software Updating</span>
									<small class="pull-right text-muted">54%</small>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-success" style="width:54%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="button.html#">
								<div class="clearfix">
									<span class="pull-left">Database Migration</span>
									<small class="pull-right text-muted">23%</small>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-warning" style="width:23%"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="button.html#">
								<div class="clearfix">
									<span class="pull-left">Unit Testing</span>
									<small class="pull-right text-muted">92%</small>
								</div>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-danger " style="width:92%"></div>
								</div>
							</a>
						</li>
						<li><a href="button.html#">View all tasks</a></li>					  
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="button.html#">
						<i class="fa fa-bell fa-lg"></i>
						<span class="notification-label bounceIn animation-delay6">5</span>
					</a>
					<ul class="dropdown-menu notification dropdown-3">
						<li><a href="button.html#">You have 5 new notifications</a></li>					  
						<li>
							<a href="button.html#">
								<span class="notification-icon bg-warning">
									<i class="fa fa-warning"></i>
								</span>
								<span class="m-left-xs">Server #2 not responding.</span>
								<span class="time text-muted">Just now</span>
							</a>
						</li>
						<li>
							<a href="button.html#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">2m ago</span>
							</a>
						</li>
						<li>
							<a href="button.html#">
								<span class="notification-icon bg-danger">
									<i class="fa fa-bolt"></i>
								</span>
								<span class="m-left-xs">Application error.</span>
								<span class="time text-muted">5m ago</span>
							</a>
						</li>
						<li>
							<a href="button.html#">
								<span class="notification-icon bg-success">
									<i class="fa fa-usd"></i>
								</span>
								<span class="m-left-xs">2 items sold.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li>
							<a href="button.html#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li><a href="button.html#">View all notifications</a></li>					  
					</ul>
				</li>
				<li class="profile dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="button.html#">
						<strong>John Doe</strong>
						<span><i class="fa fa-chevron-down"></i></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="clearfix" href="button.html#">
								<img src="assets/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>John Doe</strong>
									<p class="grey">John_Doe@email.com</p> 
								</div>
							</a>
						</li>
						<li><a tabindex="-1" href="profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
						<li><a tabindex="-1" href="gallery.html" class="main-link"><i class="fa fa-picture-o fa-lg"></i> Photo Gallery</a></li>
						<li><a tabindex="-1" href="button.html#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" class="main-link logoutConfirm_open" href="button.html#logoutConfirm" data-popup-ordinal="0" id="open_23576207"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /top-nav-->
		
		<aside class="fixed skin-6">		
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="sidebar-inner scrollable-sidebar" style="overflow: hidden; width: auto; height: 100%;">
				<div class="size-toggle">
					<a class="btn btn-sm" id="sizeToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="btn btn-sm pull-right logoutConfirm_open" href="button.html#logoutConfirm" data-popup-ordinal="1" id="open_20903004">
						<i class="fa fa-power-off"></i>
					</a>
				</div><!-- /size-toggle -->	
				<div class="user-block clearfix">
					<img src="assets/user.jpg" alt="User Avatar">
					<div class="detail">
						<strong>John Doe</strong><span class="badge badge-danger bounceIn animation-delay4 m-left-xs">4</span>
						<ul class="list-inline">
							<li><a href="profile.html">Profile</a></li>
							<li><a href="inbox.html" class="no-margin">Inbox</a></li>
						</ul>
					</div>
				</div><!-- /user-block -->
				<div class="search-block">
					<div class="input-group">
						<input type="text" class="form-control input-sm" placeholder="search here...">
						<span class="input-group-btn">
							<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div><!-- /input-group -->
				</div><!-- /search-block -->
				<div class="main-menu">
					<?php include("sidebar.php")?>
					
					<div class="alert alert-info">
						Welcome to Perfect Admin. Do not forget to check all my pages. 
					</div>
				</div><!-- /main-menu -->
			</div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 0px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 415.28px;"></div><div class="slimScrollRail" style="width: 0px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div><!-- /sidebar-inner scrollable-sidebar -->
		</aside>

		<div id="main-container">
			<div id="breadcrumb">
				<ul class="breadcrumb">
					 <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
					 <li>Component</li>	 
					 <li class="active">Button &amp; Icons</li>	 
				</ul>
			</div><!-- /breadcrumb-->
			<div class="padding-md">
				<div class="row">
					<div class="col-md-6">
						<h4 class="headline">
							Default Button
							<span class="line"></span>
						</h4>
						<a class="btn btn-default">Default</a>
						<a class="btn btn-primary">Primary</a>
						<a class="btn btn-info">Info</a>
						<a class="btn btn-success">Success</a>
						<a class="btn btn-warning">Warning</a>
						<a class="btn btn-danger">Danger</a>
						<div class="seperator"></div>
						<div class="seperator"></div>
						<h4 class="headline">
							Button Dropdown
							<span class="line"></span>
						</h4>
						<div class="btn-group">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="button.html#">Action</a></li>
								<li><a href="button.html#">Another action</a></li>
								<li><a href="button.html#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="button.html#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group">
							<button class="btn btn-success">Action</button>
							<button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="button.html#">Action</a></li>
								<li><a href="button.html#">Another action</a></li>
								<li><a href="button.html#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="button.html#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<h5>Slide Down</h5>
						<div class="btn-group">
							<button class="btn btn-success">Action</button>
							<button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
							<ul class="dropdown-menu slidedown">
								<li><a href="button.html#">Action</a></li>
								<li><a href="button.html#">Another action</a></li>
								<li><a href="button.html#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="button.html#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<h5>On hover</h5>
						<div class="btn-group hover-dropdown">
							<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
							<ul class="dropdown-menu slidedown">
								<li><a href="button.html#">Action</a></li>
								<li><a href="button.html#">Another action</a></li>
								<li><a href="button.html#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="button.html#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						<div class="btn-group hover-dropdown">
							<button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="button.html#">Action</a></li>
								<li><a href="button.html#">Another action</a></li>
								<li><a href="button.html#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="button.html#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
						
						<div class="seperator"></div>
						<div class="seperator"></div>
						
						<h4 class="headline">
							Button Size
							<span class="line"></span>
						</h4>
						<p>
							<button class="btn btn-xs btn-success" type="button">Mini button</button>
							<button class="btn btn-xs btn-info" type="button">Mini button</button>
						</p>
						<p>
							<button class="btn btn-sm btn-success" type="button">Small button</button>
							<button class="btn btn-sm btn-info" type="button">Small button</button>
						</p>
						<p>
							<button class="btn btn-success" type="button">Default button</button>
							<button class="btn btn-info" type="button">Default button</button>
						</p>
						<p>
							<button class="btn btn-lg btn-success" type="button">Large button</button>
							<button class="btn btn-lg btn-info" type="button">Large button</button>
						</p>
						
						<div class="seperator"></div>
						<div class="seperator"></div>
						
						<h4 class="headline">
							Button with Icons
							<span class="line"></span>
						</h4>
						<a class="btn btn-danger"><i class="fa fa-home"></i> Home</a>
						<a class="btn btn-success"><i class="fa fa-edit fa-lg"></i> Edit Profile</a>
						<a class="btn btn-primary">Next <i class="fa fa-chevron-right"></i></a>
						<a class="btn btn-warning"><i class="fa fa-chevron-left"></i> Back</a>
						<a class="btn btn-default"><i class="fa fa-dashboard"></i> Dashboard</a>
						
					</div><!-- /.col -->
					<div class="col-md-6">
						<h4 class="headline">
							Application Button
							<span class="line"></span>
						</h4>
						<a class="btn btn-danger quick-btn"><i class="fa fa-envelope"></i><span>Email</span></a>
						<a class="btn btn-success quick-btn"><i class="fa fa-music"></i><span>Music</span></a>
						<a class="btn btn-info quick-btn"><i class="fa fa-picture-o"></i><span>Gallery</span></a>
						<a class="btn btn-warning quick-btn"><i class="fa fa-envelope"></i><span>Home</span></a>
						<a class="btn btn-default quick-btn"><i class="fa fa-print"></i><span>Print</span></a>
						
						<div class="seperator"></div>
						<div class="seperator"></div>
						
						<h4 class="headline">
							Block Button
							<span class="line"></span>
						</h4>
						<a class="btn btn-default block">Block Button</a>
						<div class="seperator"></div>
						<a class="btn btn-success block">Block Button</a>
						<div class="seperator"></div>
						<a class="btn btn-danger block">Block Button</a>
						
						<div class="seperator"></div>
						<div class="seperator"></div>
						
						<h4 class="headline">
							Button Group
							<span class="line"></span>
						</h4>
						<div class="btn-group">
							<button type="button" class="btn btn-default">Left</button>
							<button type="button" class="btn btn-default">Middle</button>
							<button type="button" class="btn btn-default">Right</button>
						</div>
						<div class="seperator"></div>
						
						<div class="btn-toolbar no-margin">
							<div class="btn-group">
								<button type="button" class="btn btn-default">1</button>
								<button type="button" class="btn btn-default">2</button>
								<button type="button" class="btn btn-default">3</button>
								<button type="button" class="btn btn-default">4</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">5</button>
								<button type="button" class="btn btn-default">6</button>
								<button type="button" class="btn btn-default">7</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default">8</button>
							</div>
						</div>
						
						<div class="seperator"></div>
						
						<div class="btn-group">
							<button type="button" class="btn btn-default">1</button>
							<button type="button" class="btn btn-default">2</button>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									Dropdown
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="button.html#">Dropdown link</a></li>
									<li><a href="button.html#">Dropdown link</a></li>
								</ul>
							</div>
						</div><!-- /btn-group -->
						
						<div class="seperator"></div>
						
						<div class="btn-group-vertical">
							<button type="button" class="btn btn-default">Button</button>
							<button type="button" class="btn btn-default">Button</button>
							<div class="btn-group">
								<button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									Dropdown
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
									<li><a href="button.html#">Dropdown link</a></li>
									<li><a href="button.html#">Dropdown link</a></li>
								</ul>
							</div>
						</div><!-- /btn-group-vertical -->
			
						<div class="seperator"></div>
			
						<div class="btn-group btn-group-justified">
							<a href="button.html#" class="btn btn-default">Left</a>
							<a href="button.html#" class="btn btn-default">Middle</a>
							<a href="button.html#" class="btn btn-default">Right</a>
						</div><!-- /btn-group -->
					</div><!-- /.col -->
				</div><!-- /.row -->
				
				<h4 class="headline">
					Font Awesome Icons  
					<a href="http://fortawesome.github.io/Font-Awesome/"><small class="pull-right text-muted"><i class="fa fa-link"></i> Sell all icons</small></a>
					<span class="line"></span>
				</h4>
					
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<ul class="icons-list">
							<li><i class="fa fa-adjust fa-lg"></i> fa-adjust</li>
							<li><i class="fa fa-asterisk fa-lg"></i> fa-asterisk</li>
							<li><i class="fa fa-ban fa-lg"></i> fa-ban</li>
							<li><i class="fa fa-bar-chart-o fa-lg"></i> fa-bar-chart-o</li>
							<li><i class="fa fa-barcode fa-lg"></i> fa-barcode</li>
							<li><i class="fa fa-flask fa-lg"></i> fa-flask</li>
							<li><i class="fa fa-beer fa-lg"></i> fa-beer</li>
							<li><i class="fa fa-bell fa-lg"></i> fa-bell</li>
							<li><i class="fa fa-bell-o fa-lg"></i> fa-bell-o</li>
							<li><i class="fa fa-bolt fa-lg"></i> fa-bolt</li>
							<li><i class="fa fa-book fa-lg"></i> fa-book</li>
							<li><i class="fa fa-bookmark fa-lg"></i> fa-bookmark</li>
							<li><i class="fa fa-bookmark-o fa-lg"></i> fa-bookmark-o</li>
							<li><i class="fa fa-briefcase fa-lg"></i> fa-briefcase</li>
							<li><i class="fa fa-bullhorn fa-lg"></i> fa-bullhorn</li>
							<li><i class="fa fa-calendar fa-lg"></i> fa-calendar</li>
							<li><i class="fa fa-camera fa-lg"></i> fa-camera</li>
							<li><i class="fa fa-camera-retro fa-lg"></i> fa-camera-retro</li>
							<li><i class="fa fa-certificate fa-lg"></i> fa-certificate</li>
							<li><i class="fa fa-check fa-lg"></i> fa-check</li>
							<li><i class="fa fa-square-o fa-lg"></i> fa-square-o</li>
							<li><i class="fa fa-circle fa-lg"></i> fa-circle</li>
							<li><i class="fa fa-circle-o fa-lg"></i> fa-circle-o</li>
							<li><i class="fa fa-cloud fa-lg"></i> fa-cloud</li>
							<li><i class="fa fa-cloud-download fa-lg"></i> fa-cloud-download</li>
							<li><i class="fa fa-cloud-upload fa-lg"></i> fa-cloud-upload</li>
							<li><i class="fa fa-coffee fa-lg"></i> fa-coffee</li>
							<li><i class="fa fa-cog fa-lg"></i> fa-cog</li>
							<li><i class="fa fa-cogs fa-lg"></i> fa-cogs</li>
							<li><i class="fa fa-comment fa-lg"></i> fa-comment</li>
							<li><i class="fa fa-comment-o fa-lg"></i> fa-comment-o</li>
							<li><i class="fa fa-comments fa-lg"></i> fa-comments</li>
							<li><i class="fa fa-comments-o fa-lg"></i> fa-comments-o</li>
							<li><i class="fa fa-credit-card fa-lg"></i> fa-credit-card</li>
							<li><i class="fa fa-dashboard fa-lg"></i> fa-dashboard</li>
							<li><i class="fa fa-desktop fa-lg"></i> fa-desktop</li>
							<li><i class="fa fa-download fa-lg"></i> fa-download</li>
							<li><i class="fa fa-arrow-circle-o-down fa-lg"></i> fa-arrow-circle-o-down</li>
						</ul>
					</div><!-- /.col -->
					<div class="col-md-3 col-sm-3">
						<ul class="icons-list">
							<li><i class="fa fa-edit fa-lg"></i> fa-edit</li>
							<li><i class="fa fa-envelope fa-lg"></i> fa-envelope</li>
							<li><i class="fa fa-envelope-o fa-lg"></i> fa-envelope-o</li>
							<li><i class="fa fa-exchange fa-lg"></i> fa-exchange</li>
							<li><i class="fa fa-exclamation-circle fa-lg"></i> fa-exclamation-circle</li>
							<li><i class="fa fa-external-link fa-lg"></i> fa-external-link</li>
							<li><i class="fa fa-eye fa-lg"></i> fa-eye</li>
							<li><i class="fa fa-eye-slash fa-lg"></i> fa-eye-slash</li>
							<li><i class="fa fa-video-camera fa-lg"></i> fa-video-camera</li>
							<li><i class="fa fa-fighter-jet fa-lg"></i> fa-fighter-jet</li>
							<li><i class="fa fa-film fa-lg"></i> fa-film</li>
							<li><i class="fa fa-filter fa-lg"></i> fa-filter</li>
							<li><i class="fa fa-fire fa-lg"></i> fa-fire</li>
							<li><i class="fa fa-flag fa-lg"></i> fa-flag</li>
							<li><i class="fa fa-folder fa-lg"></i> fa-folder</li>
							<li><i class="fa fa-folder-open fa-lg"></i> fa-folder-open</li>
							<li><i class="fa fa-folder-o fa-lg"></i> fa-folder-o</li>
							<li><i class="fa fa-folder-open-o fa-lg"></i> fa-folder-open-o</li>
							<li><i class="fa fa-cutlery fa-lg"></i> fa-cutlery</li>
							<li><i class="fa fa-gift fa-lg"></i> fa-gift</li>
							<li><i class="fa fa-glass fa-lg"></i> fa-glass</li>
							<li><i class="fa fa-globe fa-lg"></i> fa-globe</li>
							<li><i class="fa fa-group fa-lg"></i> fa-group</li>
							<li><i class="fa fa-hdd-o fa-lg"></i> fa-hdd-o</li>
							<li><i class="fa fa-headphones fa-lg"></i> fa-headphones</li>
							<li><i class="fa fa-heart fa-lg"></i> fa-heart</li>
							<li><i class="fa fa-heart-o fa-lg"></i> fa-heart-o</li>
							<li><i class="fa fa-home fa-lg"></i> fa-home</li>
							<li><i class="fa fa-inbox fa-lg"></i> fa-inbox</li>
							<li><i class="fa fa-info-circle fa-lg"></i> fa-info-circle</li>
							<li><i class="fa fa-key fa-lg"></i> fa-key</li>
							<li><i class="fa fa-leaf fa-lg"></i> fa-leaf</li>
							<li><i class="fa fa-laptop fa-lg"></i> fa-laptop</li>
							<li><i class="fa fa-legal fa-lg"></i> fa-legal</li>
							<li><i class="fa fa-lemon-o fa-lg"></i> fa-lemon-o</li>
							<li><i class="fa fa-lightbulb-o fa-lg"></i> fa-lightbulb-o</li>
							<li><i class="fa fa-lock fa-lg"></i> fa-lock</li>
							<li><i class="fa fa-unlock fa-lg"></i> fa-unlock</li>
						</ul>
					</div><!-- /.col -->
					<div class="col-md-3 col-sm-3">
						<ul class="icons-list">
							<li><i class="fa fa-magic fa-lg"></i> fa-magic</li>
							<li><i class="fa fa-magnet fa-lg"></i> fa-magnet</li>
							<li><i class="fa fa-map-marker fa-lg"></i> fa-map-marker</li>
							<li><i class="fa fa-minus fa-lg"></i> fa-minus</li>
							<li><i class="fa fa-minus-circle fa-lg"></i> fa-minus-circle</li>
							<li><i class="fa fa-mobile-phone fa-lg"></i> fa-mobile-phone</li>
							<li><i class="fa fa-money fa-lg"></i> fa-money</li>
							<li><i class="fa fa-arrows fa-lg"></i> fa-arrows</li>
							<li><i class="fa fa-music fa-lg"></i> fa-music</li>
							<li><i class="fa fa-power-off"></i> fa-power-off</li>
							<li><i class="fa fa-check fa-lg"></i> fa-check</li>
							<li><i class="fa fa-check-circle-o fa-lg"></i> fa-check-circle-o</li>
							<li><i class="fa fa-check-circle fa-lg"></i> fa-check-circle</li>
							<li><i class="fa fa-pencil fa-lg"></i> fa-pencil</li>
							<li><i class="fa fa-picture-o fa-lg"></i> fa-picture-o</li>
							<li><i class="fa fa-plane fa-lg"></i> fa-plane</li>
							<li><i class="fa fa-plus fa-lg"></i> fa-plus</li>
							<li><i class="fa fa-plus-circle fa-lg"></i> fa-plus-circle</li>
							<li><i class="fa fa-print fa-lg"></i> fa-print</li>
							<li><i class="fa fa-thumb-tack fa-lg"></i> fa-thumb-tack</li>
							<li><i class="fa fa-qrcode fa-lg"></i> fa-qrcode</li>
							<li><i class="fa fa-question-circle fa-lg"></i> fa-question-circle</li>
							<li><i class="fa fa-quote-left fa-lg"></i> fa-quote-left</li>
							<li><i class="fa fa-quote-right fa-lg"></i> fa-quote-right</li>
							<li><i class="fa fa-random fa-lg"></i> fa-random</li>
							<li><i class="fa fa-refresh fa-lg"></i> fa-refresh</li>
							<li><i class="fa fa-times fa-lg"></i> fa-times</li>
							<li><i class="fa fa-times-circle-o fa-lg"></i> fa-times-circle-o</li>
							<li><i class="fa fa-times-circle fa-lg"></i> fa-times-circle</li>
							<li><i class="fa fa-bars fa-lg"></i> fa-bars</li>
							<li><i class="fa fa-reply fa-lg"></i> fa-reply</li>
							<li><i class="fa fa-arrows-h fa-lg"></i> fa-arrows-h</li>
							<li><i class="fa fa-arrows-v fa-lg"></i> fa-arrows-v</li>
							<li><i class="fa fa-retweet fa-lg"></i> fa-retweet</li>
							<li><i class="fa fa-road fa-lg"></i> fa-road</li>
							<li><i class="fa fa-rss fa-lg"></i> fa-rss</li>
							<li><i class="fa fa-crosshairs fa-lg"></i> fa-crosshairs</li>
							<li><i class="fa fa-search fa-lg"></i> fa-search</li>
						</ul>
					</div><!-- /.col -->
					<div class="col-md-3 col-sm-3">
						<ul class="icons-list">	
							<li><i class="fa fa-share-square-o fa-lg"></i> fa-share-square-o</li>
							<li><i class="fa fa-share fa-lg"></i> fa-share</li>
							<li><i class="fa fa-shopping-cart fa-lg"></i> fa-shopping-cart</li>
							<li><i class="fa fa-signal fa-lg"></i> fa-signal</li>
							<li><i class="fa fa-sign-in fa-lg"></i> fa-sign-in</li>
							<li><i class="fa fa-sign-out fa-lg"></i> fa-sign-out</li>
							<li><i class="fa fa-sitemap fa-lg"></i> fa-sitemap</li>
							<li><i class="fa fa-sort fa-lg"></i> fa-sort</li>
							<li><i class="fa fa-sort-down fa-lg"></i> fa-sort-down</li>
							<li><i class="fa fa-sort-up fa-lg"></i> fa-sort-up</li>
							<li><i class="fa fa-spinner fa-lg"></i> fa-spinner</li>
							<li><i class="fa fa-star fa-lg"></i> fa-star</li>
							<li><i class="fa fa-star-o fa-lg"></i> fa-star-o</li>
							<li><i class="fa fa-star-half fa-lg"></i> fa-star-half</li>
							<li><i class="fa fa-tablet fa-lg"></i> fa-tablet</li>
							<li><i class="fa fa-tag fa-lg"></i> fa-tag</li>
							<li><i class="fa fa-tags fa-lg"></i> fa-tags</li>
							<li><i class="fa fa-tasks fa-lg"></i> fa-tasks</li>
							<li><i class="fa fa-thumbs-down fa-lg"></i> fa-thumbs-down</li>
							<li><i class="fa fa-thumbs-up fa-lg"></i> fa-thumbs-up</li>
							<li><i class="fa fa-clock-o fa-lg"></i> fa-clock-o</li>
							<li><i class="fa fa-tint fa-lg"></i> fa-tint</li>
							<li><i class="fa fa-trash-o fa-lg"></i> fa-trash-o</li>
							<li><i class="fa fa-trophy fa-lg"></i> fa-trophy</li>
							<li><i class="fa fa-truck fa-lg"></i> fa-truck</li>
							<li><i class="fa fa-umbrella fa-lg"></i> fa-umbrella</li>
							<li><i class="fa fa-arrow-circle-o-up fa-lg"></i> fa-arrow-circle-o-up</li>
							<li><i class="fa fa-upload fa-lg"></i> fa-upload</li>
							<li><i class="fa fa-user fa-lg"></i> fa-user</li>
							<li><i class="fa fa-user-md fa-lg"></i> fa-user-md</li>
							<li><i class="fa fa-volume-off fa-lg"></i> fa-volume-off</li>
							<li><i class="fa fa-volume-down fa-lg"></i> fa-volume-down</li>
							<li><i class="fa fa-volume-up fa-lg"></i> fa-volume-up</li>
							<li><i class="fa fa-warning fa-lg"></i> fa-warning</li>
							<li><i class="fa fa-wrench fa-lg"></i> fa-wrench</li>
							<li><i class="fa fa-search-plus fa-lg"></i> fa-search-plus</li>
							<li><i class="fa fa-search-minus fa-lg"></i> fa-search-minus</li>
						</ul>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.padding-md -->
		</div><!-- /main-container -->
	</div><!-- /wrapper -->

	<a href="button.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	
	<!-- Logout confirmation -->
	
<?php include("script.php")?>
  

</body></html>