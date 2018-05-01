<?php

session_start();

include('connect.php');

?>

<!DOCTYPE html>
<!-- saved from url=(0048)http://endlesstheme.com/Perfect_Admin/index.html -->
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
	
	<!-- Color box -->
	<link href="assets/colorbox.css" rel="stylesheet">
	
	<!-- Morris -->
	<link href="assets/morris.css" rel="stylesheet">	
	
	<!-- Perfect -->
	<link href="assets/app.min.css" rel="stylesheet">
	<link href="assets/app-skin.css" rel="stylesheet">
	
  <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

  <body style="" class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div id="logoutConfirm_background" class="popup_background" style="opacity: 0; visibility: hidden; background-color: black; position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 2000; transition: all 0.3s;"></div><div id="logoutConfirm_wrapper" class="popup_wrapper" style="opacity: 0; visibility: hidden; position: fixed; overflow: auto; z-index: 2001; transition: all 0.3s; top: 0px; right: 0px; left: 0px; bottom: 0px; text-align: center; display: none;"><div class="custom-popup width-100 popup_content" id="logoutConfirm" data-popup-initialized="true" aria-hidden="true" role="dialog" aria-labelledby="open_96574876" style="opacity: 0; visibility: hidden; display: inline-block; outline: none; transition: all 0.3s; text-align: left; position: relative; vertical-align: middle;">
		<div class="padding-md">
			<h4 class="m-top-none"> Do you want to logout?</h4>
		</div>

		<div class="text-center">
			<a class="btn btn-success m-right-sm" href="http://endlesstheme.com/Perfect_Admin/login.html">Logout</a>
			<a class="btn btn-danger logoutConfirm_close">Cancel</a>
		</div>
	</div><div class="popup_align" style="display: inline-block; vertical-align: middle; height: 100%;"></div></div>
	<!-- Overlay Div -->
	<div id="overlay" class="transparent" style="display: none;"></div>
	
	<a href="http://endlesstheme.com/Perfect_Admin/index.html" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
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
		<div id="top-nav" class="fixed skin-6">
			<a href="http://endlesstheme.com/Perfect_Admin/index.html#" class="brand">
				<span>Perfect</span>
				<span class="text-toggle"> Admin</span>
			</a><!-- /brand -->					
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
					<a class="dropdown-toggle" data-toggle="dropdown" href="http://endlesstheme.com/Perfect_Admin/index.html#">
						<i class="fa fa-envelope fa-lg"></i>
						<span class="notification-label bounceIn animation-delay4">7</span>
					</a>
					<ul class="dropdown-menu message dropdown-1">
						<li><a>You have 4 new unread messages</a></li>					  
						<li>
							<a class="clearfix" href="http://endlesstheme.com/Perfect_Admin/index.html#">
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
							<a class="clearfix" href="http://endlesstheme.com/Perfect_Admin/index.html#">
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
							<a class="clearfix" href="http://endlesstheme.com/Perfect_Admin/index.html#">
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
							<a class="clearfix" href="http://endlesstheme.com/Perfect_Admin/index.html#">
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
						<li><a href="http://endlesstheme.com/Perfect_Admin/index.html#">View all messages</a></li>					  
					</ul>
				</li>
				<li class="dropdown hidden-xs">
					<a href="http://endlesstheme.com/Perfect_Admin/index.html#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-tasks fa-lg"></i>
						<span class="notification-label bounceIn animation-delay5">4</span>
					</a>
					<ul class="dropdown-menu task dropdown-2">
						<li><a href="http://endlesstheme.com/Perfect_Admin/index.html#">You have 4 tasks to complete</a></li>					  
						<li>
							<a href="http://endlesstheme.com/Perfect_Admin/index.html#">
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
							<a href="http://endlesstheme.com/Perfect_Admin/index.html#">
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
							<a href="http://endlesstheme.com/Perfect_Admin/index.html#">
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
							<a href="http://endlesstheme.com/Perfect_Admin/index.html#">
								<div class="clearfix">
									<span class="pull-left">Unit Testing</span>
									<small class="pull-right text-muted">92%</small>
								</div>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-danger " style="width:92%"></div>
								</div>
							</a>
						</li>
						<li><a href="http://endlesstheme.com/Perfect_Admin/index.html#">View all tasks</a></li>					  
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="http://endlesstheme.com/Perfect_Admin/index.html#">
						<i class="fa fa-bell fa-lg"></i>
						<span class="notification-label bounceIn animation-delay6">5</span>
					</a>
					<ul class="dropdown-menu notification dropdown-3">
						<li><a href="http://endlesstheme.com/Perfect_Admin/index.html#">You have 5 new notifications</a></li>					  
						<li>
							<a href="http://endlesstheme.com/Perfect_Admin/index.html#">
								<span class="notification-icon bg-warning">
									<i class="fa fa-warning"></i>
								</span>
								<span class="m-left-xs">Server #2 not responding.</span>
								<span class="time text-muted">Just now</span>
							</a>
						</li>
						<li>
							<a href="http://endlesstheme.com/Perfect_Admin/index.html#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">2m ago</span>
							</a>
						</li>
						<li>
							<a href="http://endlesstheme.com/Perfect_Admin/index.html#">
								<span class="notification-icon bg-danger">
									<i class="fa fa-bolt"></i>
								</span>
								<span class="m-left-xs">Application error.</span>
								<span class="time text-muted">5m ago</span>
							</a>
						</li>
						<li>
							<a href="http://endlesstheme.com/Perfect_Admin/index.html#">
								<span class="notification-icon bg-success">
									<i class="fa fa-usd"></i>
								</span>
								<span class="m-left-xs">2 items sold.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li>
							<a href="http://endlesstheme.com/Perfect_Admin/index.html#">
								<span class="notification-icon bg-success">
									<i class="fa fa-plus"></i>
								</span>
								<span class="m-left-xs">New user registration.</span>
								<span class="time text-muted">1hr ago</span>
							</a>
						</li>
						<li><a href="http://endlesstheme.com/Perfect_Admin/index.html#">View all notifications</a></li>					  
					</ul>
				</li>
				<li class="profile dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="http://endlesstheme.com/Perfect_Admin/index.html#">
						<strong>John Doe</strong>
						<span><i class="fa fa-chevron-down"></i></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="clearfix" href="http://endlesstheme.com/Perfect_Admin/index.html#">
								<img src="assets/user.jpg" alt="User Avatar">
								<div class="detail">
									<strong>John Doe</strong>
									<p class="grey">John_Doe@email.com</p> 
								</div>
							</a>
						</li>
						<li><a tabindex="-1" href="http://endlesstheme.com/Perfect_Admin/profile.html" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
						<li><a tabindex="-1" href="http://endlesstheme.com/Perfect_Admin/gallery.html" class="main-link"><i class="fa fa-picture-o fa-lg"></i> Photo Gallery</a></li>
						<li><a tabindex="-1" href="http://endlesstheme.com/Perfect_Admin/index.html#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
						<li class="divider"></li>
						<li><a tabindex="-1" class="main-link logoutConfirm_open" href="http://endlesstheme.com/Perfect_Admin/index.html#logoutConfirm" data-popup-ordinal="0" id="open_96574876"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
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
					<a class="btn btn-sm pull-right logoutConfirm_open" href="http://endlesstheme.com/Perfect_Admin/index.html#logoutConfirm" data-popup-ordinal="1" id="open_55237514">
						<i class="fa fa-power-off"></i>
					</a>
				</div><!-- /size-toggle -->	
				<div class="user-block clearfix">
					<img src="assets/user.jpg" alt="User Avatar">
					<div class="detail">
						<strong>John Doe</strong><span class="badge badge-danger m-left-xs bounceIn animation-delay4">4</span>
						<ul class="list-inline">
							<li><a href="http://endlesstheme.com/Perfect_Admin/profile.html">Profile</a></li>
							<li><a href="http://endlesstheme.com/Perfect_Admin/inbox.html" class="no-margin">Inbox</a></li>
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
			</div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 0px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 461.744px;"></div><div class="slimScrollRail" style="width: 0px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div><!-- /sidebar-inner -->
		</aside>

		<div id="main-container">
			<div id="breadcrumb">
				<ul class="breadcrumb">
					 <li><i class="fa fa-home"></i><a href="http://endlesstheme.com/Perfect_Admin/index.html"> Home</a></li>
					 <li class="active">Dashboard</li>	 
				</ul>
			</div><!-- /breadcrumb-->
			
<!-- Customer Main Tab -->
 <div class="tab-pane " id="b_tab">
        <!-- Nav tabs -->
          <ul class="nav nav-tabs col-md-12">
          <li class="active col-md-3"><a href="#Customer_inner" data-toggle="tab">Customer</a></li>
          <li class="col-md-3 "><a href="#Contacts_inner " data-toggle="tab">Contacts</a></li>
          <li class="col-md-3"><a href="#Customer_Activity_inner" data-toggle="tab">Customer Activity</a></li>
		  <li class="col-md-3"><a href="#Booking_Profile_inner" data-toggle="tab">Booking Profile</a></li>
        </ul>
		
        <!-- Nav tabs content -->
    <div class="tab-content">
    <div id="Customer_inner" class="tab-pane active">
		  
		<form class="well form-horizontal" action="updateCustomer.php" method="post"  id="contact_form">
		  
		  .
<fieldset>

<div class="col-md-12">

<div class="col-md-6">


<!-- Text input-->

<div class="form-group">
  <label class="col-md-2 control-label">Name</label>  
  <div class="col-md-7 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>

  <div class="col-md-3">
  <button type="button" class="btn" style="background: url(assets/images/Torch.png);
    background-repeat: no-repeat;width: 2.5em;height: 2.5em;" alt="Torch"></button>
  <button type="button" class="btn" style="background: url(assets/images/pin.png);
    background-repeat: no-repeat;width: 2.5em;height: 2.5em;" alt="pin"></button>
  </div>
  
  </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" >Phone</label> 
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="Phone" placeholder="Phone" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label">Fax</label>  
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="Fax" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label">EMail</label>  
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="EMail" placeholder="EMail" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-2 control-label">Website</label>  
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="Website" placeholder="Website" class="form-control" type="text">
    </div>
  </div>
</div>


<!-- lower group--->

<div class="tab-pane active" id="b_tab" style="border : 1px solid grey;">
        <!-- Nav tabs -->
          <ul class="nav nav-tabs col-md-12">
          <li class="active col-md-6"><a href="#Site_Address" data-toggle="tab">Site Address</a></li>
          <li class="col-md-6"><a href="#Biilling_Address " data-toggle="tab">Biilling Address</a></li>
          
        </ul>
		
        <!-- Nav tabs content -->
        <div class="tab-content">
          <div id="Site_Address" class="tab-pane active">
		  
		<form class="well form-horizontal" action=" " method="post"  id="Site_Address_form">
		  
  <div class="form-group">
  <label class="col-md-3 control-label">Address1</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Address1" placeholder="Address1" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" >Address2</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="Address2" placeholder="Address2" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label">City</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="City" placeholder="City" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label">State / Zip</label>  
    <div class="col-md-9 inputGroupContainer">
		
	<div class="col-md-4" style="padding:0px;">
	<input name="siteState" placeholder="State" class="form-control" type="text" >
	</div>
	
	<div class="col-md-8" style="padding-right:0px;">
	<input name="siteZip" placeholder="zip" class="form-control" type="text">
	</div>
	
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-3 control-label">Country</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  
  <select name="ddlSiteCountry" class="form-control selectpicker" >
		 <option value="1">USA</option>
		  <option value="2">Australia</option>
		  <option value="3">Austria</option>
		  <option value="4">Belgium</option>
		  <option value="5">Brazil</option>
		  <option value="6">Canada</option>
		  <option value="7">China</option>
		  <option value="8">Czeck Republic</option>
		   <option value="9">Denmark</option>
		  <option value="10">Euro</option>
		  <option value="11">Finland</option>
		  <option value="12">France</option>
		  <option value="13">Maxico</option>
		  <option value="14">Russia</option>
		  <option value="15">United Kingdom</option>
		
  </select>
		
    </div>
  </div>
</div>


	  </div>
     <div id="Biilling_Address" class="tab-pane">
		  
		  
  <div class="form-group">
  <label class="col-md-3 control-label">Address1</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="BillAddress1" placeholder="Address1" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" >Address2</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="BillAddress2" placeholder="Address2" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label">City</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="BillCity" placeholder="City" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label">State / Zip</label>  
    <div class="col-md-9 inputGroupContainer">
		
	<div class="col-md-4" style="padding:0px;">
	<input name="billState" placeholder="State" class="form-control" type="text" >
	</div>
	
	<div class="col-md-8" style="padding-right:0px;">
	<input name="billZip" placeholder="zip" class="form-control" type="text">
	</div>
	
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-3 control-label">Country</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="BillCountry" placeholder="Country" class="form-control" type="text">
    </div>
  </div>
</div>


</form>


		  
		  </div>
          
        </div>    
        
      </div>

<!--- lower group-->

</div>

<div class="col-md-6">

<div class="col-md-8">

<div class="form-group">
  <label class="col-md-12">SalesPerson </label>  
    <div class="col-md-12 selectContainer">
 <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
		<select name="SalesGroups" class="form-control selectpicker" >
		 <option value=" ">Please select your SalesPerson</option>
		<?php 
		$sql=$conn->query("SELECT * FROM salesgroups ORDER BY GroupName DESC"); 
		while ($row = $sql->fetch_object()) { 
		?>
		<option value="<?=$row->GroupID?>"><?php echo $row->GroupName ?></option>
		<?php } ?>
		</select>
  </div>
</div>

</div>



<div class="form-group">
  <label class="col-md-12">Referral Source </label>  
    <div class="col-md-12 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>

		<select name="ReferralSource" class="form-control selectpicker" >
		 <option value=" ">Please select your Referral Source</option>
		<?php 
		$sql=$conn->query("SELECT * FROM refsource ORDER BY refName DESC"); 
		while ($row = $sql->fetch_object()) { 
		?>
		<option value="<?=$row->refID?>"><?php echo $row->GroupName ?></option>
		
		<?php } ?>
		</select>

  </div>
</div>

</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-12">Group </label>  
    <div class="col-md-12 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>

		<select name="salesgroups" class="form-control selectpicker" >
		
</select>

  </div>
</div>

</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12">Market</label>  
    <div class="col-md-12 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
   	<select name="mrkt" class="form-control selectpicker" >
		 <option value=" ">Please select your Market</option>
		<?php 
		$sql=$conn->query("SELECT * FROM mrkt ORDER BY MrktID asc"); 
		while ($row = $sql->fetch_object()) { 
		?>
		<option value="<?=$row->MrktID?>"><?php echo $row->MrktName ?></option>
	
		<?php } ?>
		</select>
  </div>
</div>

</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12">Payment Method</label>  
    <div class="col-md-9 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
   	<select name="paymethods" class="form-control selectpicker" >
		 <option value=" ">Select your Payment</option>
		<?php 
		$sql=$conn->query("SELECT * FROM paymethods ORDER BY MethodDesc asc"); 
		while ($row = $sql->fetch_object()) { 
		?>
		<option value="<?=$row->MethodID?>"><?php echo $row->MethodDesc ?></option>
		
		<?php } ?>
		</select>
  
  </div>
  
</div>

<div class="col-md-2">
  <button type="button" class="btn">More...</button>
  </div>
  
</div>



<div class="form-group">
  <label class="col-md-4 control-label">Federal ID</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon"></i></span>
  <input name="FederalID" placeholder="FederalID" class="form-control"  type="text">
    </div>
  </div>
</div>


</div>

<div class="col-md-4 btn-section" style="border:1px solid black;text-align:center;">
<div class="col-md-12">
<div >
<button type="submit" class="btn" >Save</button>
</div>
<div>
<button type="button" class="btn" >Delete</button>
</div>
<div >
<button type="button" class="btn" >Doc Manager</button>
</div>
<div  >
<button type="button" class="btn" >Contract Roles</button>
</div>
</div>
</div>

<style>
.btn-section .btn
{
	
    margin-top: 1em;
    height: 10%;
    border: 1px solid black;
	margin-bottom: 1em;
	vertical-align: middle; 
	
	
	
}

	
</style>


 <div class="col-md-2">
  
<div class="checkbox col-md-12">
<label><input name="chkActive" type="checkbox" value="active">Active</label>
</div>
  
<div class="checkbox col-md-12">
<label><input name="chkSendEmail" type="checkbox" value="SendEmail">Send Email</label>
</div>

<div class="checkbox col-md-12">
<label><input name="chkTaxExepmt" type="checkbox" value="TaxExepmt">TaxExepmt</label>
</div>

</div>

 <div class="form-group col-md-12">
  <label for="comment">Notes:</label>
  <textarea name="NotesExist" class="form-control" rows="5" id="comment"></textarea>
</div>


</div>


</div>

</fieldset>
</form>

		  
		  
		  </div>
    <div id="Contacts_inner" class="tab-pane">
		  
		  <style>
		  #contact-modal-content
		  {
		  margin-top: 5em !important;
		  }
		  
		  #contact-modal-dialog
		  {
			width:100% !important;
			margin: 8px auto !important;
			  
		  }
		  
		  #contact-table-responsive {
    max-height:500px;
}

		#contact-table-responsive td{
			border: 1px solid grey;
			}
		  </style>
  <div class="container">
  
  <!--Contacts Modal-->
  <div id="contact-modal-dialog" class="modal-dialog">
            <div id="contact-modal-content" class="modal-content">
                <div class="modal-body" style="height:32em;">
                    <div class="panel panel-default" style="height:30em;">
                        <div id="contact-table-responsive" class="panel-body table-responsive">
                        <table class="table table-bordered" border=1>
                        <thead>
						  <tr>
							<th>ContactName</th>
							<th>Title</th>
							<th>Phone Type</th>
							 <th>Number</th>
							<th>Email Address</th>
							<th>Contact Type</th>
							<th>Active</th>
						  </tr>
						</thead>
						<tbody>
											<tr>
											<td>-</td>
											<td>-</td>
											<td>-</td>
											<td>-</td>
											<td>-</td>
											<td>-</td>
											<td>-</td>
											</tr>
						</tbody>
						</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		 <div class="col-md-12">
		  <button id="btn-Delete" type="button" class="btn-left" style="float:right;">Delete</button>
		  <button id="btn-Copy" type="button" class="btn-left" style="float:right;">Copy</button>
		  <button id="btn-Edit" type="button" class="btn-left" style="float:right;">Edit</button>
		  <button id="btn-new" type="button" class="btn-left" style="float:right;">New</button>
  
 
  </div>
</div>



</div>
    
	<div id="Customer_Activity_inner" class="tab-pane ">
  		  <style>
		  
		  #Customer-Activity-upper-cntr
		  {
			  margin-top: 2em !important;
			  
		  }
		  
		  #Customer-Activity-modal-content
		  {
		  margin-top: 13em !important;
		  }
		  
		  #Customer-Activity-modal-dialog
		  {
			width:100% !important;
			margin: 8px auto !important;
			  
		  }
		  
		  #Customer-Activity-table-responsive {
    max-height:500px;
}

		#contact-table-responsive td{
			border: 1px solid grey;
			}
		  </style>

		  <div class="container">
  
<div id="Customer-Activity-upper-cntr" class="col-md-12">
  
<div class="col-md-12">
  <div class="col-md-7">
  
  <div class="col-md-7">
  
  <div class="form-group">
  <label class="col-md-3 control-label" >Contact</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="Customer-Activity-Contact" class="form-control"  type="text">
  <option>1</option>
  <option>2</option>
  </select>
    </div>
  </div>
</div>


  </div>
  
  <div class="col-md-5">

<div class="checkbox col-md-12">
<label><input name="chkContactHistory" type="checkbox" value="active">Contact History</label>
</div>
  
  </div>
  

  
  </div>


  <div class="col-md-5">

  </div>


  </div>
 
<div class="col-md-12"> 
    <div class="col-md-7">
  
  <div class="col-md-7">
  
  <div class="form-group">
  <label class="col-md-3 control-label" >Task Category</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="Customer-Activity-Contact" class="form-control"  type="text">
  <option>All</option>
  <option>1</option>
  <option>2</option>
  </select>
    </div>
  </div>
</div>


  </div>
  
  <div class="col-md-5">

<div class="checkbox col-md-12">
<label><input name="chkCurrentTask" type="checkbox" value="active">Current Task</label>
</div>
  
  </div>
  

  
  </div>
 
  <div class="col-md-5">
    
  <div class="col-md-4">
  <button id="btn-Refresh" type="button" class="btn-left" style="float:right;">Refresh</button>
  </div>
  
  <div class="col-md-6">
  
  <div class="input-group">
   <input  name="TxtFind" class="form-control"  type="text">
  </div>
  
  </div>
  
  <div class="col-md-2">
  <button id="btn-Find" type="button" class="btn-left" style="float:right;">Find</button>
  </div>
  
  
  
  </div>
  </div>
</div>
  
<div id="Customer-Activity-modal-dialog" class="modal-dialog">
            <div id="Customer-Activity-modal-content" class="modal-content">
                <div class="modal-body" style="height:32em;">
                    <div class="panel panel-default" style="height:30em;">
                        <div id="contact-table-responsive" class="panel-body table-responsive">
                        <table class="table table-bordered" border=1>
                        <thead>
						  <tr>
							<th>ContactName</th>
							<th>Title</th>
							<th>Phone Type</th>
							 <th>Number</th>
							<th>Email Address</th>
							<th>Contact Type</th>
							<th>Active</th>
						  </tr>
						</thead>
						<tbody>
						
						</tbody>
						</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
		  
	</div>
	
	<div id="Booking_Profile_inner" class="tab-pane">
	
	
	<style>
		  
		  #Booking-Profile-upper-cntr
		  {
			  margin-top: 2em !important;
			  
		  }
		  
		  #Booking-Profile-modal-content
		  {
		  margin-top: 11em !important;
		  }
		  
		  #Booking-Profile-modal-dialog
		  {
			width:100% !important;
			margin: 8px auto !important;
			  
		  }
		  
		  #Booking-Profile-table-responsive {
    max-height:500px;
}

		#Booking-Profile-table-responsive td{
			border: 1px solid grey;
			}
		  </style>
	
<div class="container">
  
<div id="Booking-Profile-upper-cntr" class="col-md-12">
  
<div class="col-md-12">
<div class="col-md-12">
  <div class="col-md-2">
  <label class="radio-inline"><input type="radio" name="optradio">All</label>
      </div>
    
  <div class="col-md-2">
  <label class="radio-inline"><input type="radio" name="optradio">Future</label>
      </div>
    
  <div class="col-md-3">
  <label class="radio-inline"><input type="radio" name="optradio">Past</label>
      </div>
    
</div>

</div>
  
<div class="col-md-12"> 
    <div>
    <div class="col-md-2">
  
  <div class="form-group">
  
    <div class="col-md-12 inputGroupContainer">
    
  <label class="radio-inline"><input type="radio" name="optradio">Date Range</label></div>
</div>


  </div>
    
    
    
  <div class="col-md-3">
  
  <div class="form-group">
  
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="Customer-Activity-Contact" class="form-control" type="text">
  <option>All</option>
  <option>1</option>
  <option>2</option>
  </select>
    </div>
  </div>
</div>


  </div>
  
  <div class="col-md-3">
  
  <div class="form-group">
  <label class="col-md-1 control-label">to</label> 
    <div class="col-md-10 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="Customer-Activity-Contact" class="form-control" type="text">
  <option>All</option>
  <option>1</option>
  <option>2</option>
  </select>
    </div>
  </div>
</div>

  </div>

<div class="col-md-3">
  
  <div class="form-group">
  <label class="col-md-3 control-label">Status</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select name="Customer-Activity-Contact" class="form-control" type="text">
  <option>All</option>
  <option>1</option>
  <option>2</option>
  </select>
    </div>
  </div>
</div>

  </div>


<div class="col-md-1">
  
  <div class="form-group">
  
    <div class="col-md-12 inputGroupContainer">
    
<button type="submit" class="btn" style="width: 6em;height: 6%; border:1px solid black;">Refresh</button>
</div>
</div>


  </div>
    
  </div>
 
    
    
    
    
    
  </div>

  
  
</div>
  
<div id="Booking-Profile-modal-dialog" class="modal-dialog">
            <div id="Booking-Profile-modal-content" class="modal-content">
                <div class="modal-body" style="height:32em;">
                    <div class="panel panel-default" style="height:30em;">
                        <div id="Booking-Profile-table-responsive" class="panel-body table-responsive">
                        <table class="table table-bordered" border=1>
                        <thead>
						  <tr>
							<th>ContactName</th>
							<th>Title</th>
							<th>Phone Type</th>
							 <th>Number</th>
							<th>Email Address</th>
							<th>Contact Type</th>
							<th>Active</th>
						  </tr>
						</thead>
						<tbody>
											
						</tbody>
						</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
	
	</div>
    </div>    
        
      </div>
		</div><!-- /main-container -->
		<!-- Footer
		================================================== -->
		<footer>
			<div class="row">
				<div class="col-sm-6">
					<span class="footer-brand">
						<strong class="text-danger">Perfect</strong> Admin
					</span>
					<p class="no-margin">
						© 2013 <strong>Perfect Admin</strong>. ALL Rights Reserved. 
					</p>
				</div><!-- /.col -->
			</div><!-- /.row-->
		</footer>

		
		<!--Modal-->
		<div class="modal fade" id="newFolder">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4>Create new folder</h4>
      				</div>
				    <div class="modal-body">
				        <form>
							<div class="form-group">
								<label for="folderName">Folder Name</label>
								<input type="text" class="form-control input-sm" id="folderName" placeholder="Folder name here...">
							</div>
						</form>
				    </div>
				    <div class="modal-footer">
				        <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
						<a href="http://endlesstheme.com/Perfect_Admin/index.html#" class="btn btn-danger btn-sm">Save changes</a>
				    </div>
			  	</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div><!-- /wrapper -->

	<a href="http://endlesstheme.com/Perfect_Admin/index.html" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
	
	<!-- Logout confirmation -->
	
<?php include("script.php")?>	
    
<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><div id="tooltip" style="position: absolute; border: 1px solid rgb(34, 34, 34); padding: 4px; color: rgb(255, 255, 255); border-radius: 4px; background-color: rgb(0, 0, 0); opacity: 0.9; top: 620px; left: 396px; display: none;">Visitor : 5</div></body></html>
