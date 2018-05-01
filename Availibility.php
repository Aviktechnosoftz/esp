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
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
		
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
			
			
<!-- Availibility Main Tab -->
	
<div class="tab-pane active" id="a_tab">
        
		
<div class="container">
  
<div id="Availibility-upper-cntr" class="col-md-12" style="
    padding: 2em;
">
    
    
    <div class="col-md-12">
    <div class="col-md-9">
    
    <div class="col-md-12">
        
        
    
    <div class="col-md-6">
  
  <div class="col-md-7">
  
  <div class="form-group">
  <label class="control-label">Current Date Time</label> 
    
</div>


  </div>
  
  </div>

<div class="col-md-2">
    
     </div>
    
    
    <div class="col-md-4">

    
    <div class="form-group">
  <label class="col-md-4 control-label">GoTo</label>  
  <div class="col-md-8 ">
  <div class="">
    <input name="name" placeholder="Go To" class="form-control" type="text">
    </div>
  </div>

  
  </div>
    
    
  </div>
    
    
        </div>


<div class="col-md-12">
        

 <div class="col-md-12">
    
    <div class="col-md-5">
    <label class="control-label">Booking</label>
<input name="txtBooking" placeholder="Booking" class="form-control" type="text">
  </div>

<div class="col-md-2">
    
     </div>
    
    
    <div class="col-md-5">

    
    <div class="form-group">
    <label class="control-label">Dates</label>
 <input name="txtDates" placeholder="Dates" class="form-control" type="text">
  
  </div>
    
    
  </div>
    
    
        </div>



<div class="col-md-12">
    
    <div class="col-md-5">
    <label class="control-label">Booking</label>
<input name="txtBooking" placeholder="Booking" class="form-control" type="text">
  </div>

<div class="col-md-2">
    
     </div>
    
    
    <div class="col-md-5">

    
    <div class="form-group">
    <label class="control-label">Dates</label>
 <input name="txtDates" placeholder="Dates" class="form-control" type="text">
  
  </div>
    
    
  </div>
    
    
        </div>
   
    
        </div>


  
        </div>
    
    <div class="col-md-3">
       
	   
<div id='calendar'></div>

<script>

$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				/* right: 'month,agendaWeek,agendaDay' */
				right: 'month'
			},
			defaultDate: '2014-06-12',
			defaultView: 'month',
			editable: true,
			events: [
				/* {
					title: 'All Day Event',
					start: '2014-06-01'
				} */
			]
		});
		
	});

	
</script>


        </div>
    

  </div>
  
</div>
  
<div id="Availibility-Activity-modal-dialog" class="modal-dialog" style="
    width: 100%;
">
            <div id="Availibility-Activity-modal-content" class="modal-content" style="
    margin-top: 16em !important;
    /* width: 100%; */
">
                <div class="modal-body" style="height:113em;">
                    <div class="panel panel-default" style="height:30em;">
					
					<div class="col-md-12">
        
        <div class="col-md-3">
            
            <div class="form-group">
  <label class="col-md-4 control-label">Section</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        
  
  <select name="ddlSection" class="form-control selectpicker">
		 <option value="1">USA</option>
		  <option value="2">Australia</option>
		
  </select>
		
    </div>
  </div>
</div>
            </div>
        <div class="col-md-3">
            
            <div class="form-group">
  <label class="col-md-4 control-label">View</label>  
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
        
  
  <select name="ddlView" class="form-control selectpicker">
		 <option value="1">USA</option>
		  <option value="2">Australia</option>
		
  </select>
		
    </div>
  </div>
</div>
            </div><div class="col-md-3">
            
            <div class="form-group">
  <label class="col-md-4">Show</label>  
    <div class="col-md-8 ">
    <div class="input-group">
        
  
  <select name="ddlShow" class="form-control selectpicker">
		 <option value="1">USA</option>
		  <option value="2">Australia</option>
		
  </select>
		
    </div>
  </div>
</div>
            </div><div class="col-md-3">
            
            <div class="form-group">
  <label class="col-md-3 control-label">Current Section</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  
  <input name="txtCurrentSection" placeholder="First Name" class="form-control" type="text">
    </div>
  </div>

  
  
  </div>
    
            </div></div>
			
                        <div id="daily-table-responsive" class="panel-body">
                        <table class="table table-bordered" border="1">
                        
						<thead>
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Function Room</td>
						
						<?php $am=0;
						for($am=4;$am<=12;$am++){?>
						<td><?=$am?>a</td>
						
						<?php }?>
						
						<?php for($pm=1;$pm<=12;$pm++){?>
						<td><?=$pm?>a</td>
						<?php }?>
						
						
						<?php for($k=1;$k<=3;$k++){?>
						<td><?=$k?>a</td>
						<?php }?>
						
						</tr>
						</thead>
						<tbody>
						
						<?php for($i=0;$i<30;$i++){?>
						<tr>
						<?php for( $j=0;$j<28;$j++){?>
						
						<td  <?php if($j==3) { echo 'style="background:#efefef;border-bottom-color: lightgrey;"'; }?> > 
						
						<?php if($j==2)
						{ ?>
						
						<input name="chkActive" type="checkbox" value="active">
						<style>
						
						input[type=checkbox], input[type=radio] {
						opacity: 1 !important;
						    position: relative;

						}
						</style>
						<?php } ?>
						
						<?php if($j==3)
						{		
					   
						switch($i)								
						{
							case '0':echo "Living Room";break;
							case '1':echo "Formal Dinning Room";break;
							case '2':echo "Formal Terrace";break;
							case '3':echo "Ballroom";break;
							case '4':echo "Beach";break;
							case '5':echo "Dance Terrace";break;
							case '6':echo "East Bar";break;
							case '7':echo "NY End East Bar";break;
							case '8':echo "Perrennial Garden";break;
							case '9':echo "Wood End East Bar";break;
							case '10':echo "Library";break;
							case '11':echo "West Deck";break;
							case '12':echo "Bar";break;
							case '13':echo "Flag Pole Lawn";break;
							case '14':echo "Bowling Green";break;
							case '15':echo "Sailors Terrace";break;
							case '16':echo "Front Porce";break;
							case '17':echo "Parking Lot";break;
							case '18':echo "JAYC House";break;
							case '19':echo " Jr. JAYC House";break;
							case '20':echo "Regatta 1";break;
							case '21':echo "Regatta 1";break;
							case '22':echo "Main Dock";break;
							case '23':echo "JAYC float";break;
							case '24':echo "Gibbens point";break;
							case '25':echo "Tennis Deck";break;
							case '26':echo "Tennis Court1";break;
							case '27':echo "Paddle Tennis";break;
							case '28':echo "Pool";break;
							case '29':echo "Formal Lawn";break;
							
							
						}
										
						}	
							?>
						
						</td>
						<?php  }?>
						</tr>
						<?php }?>
					
						</tbody>
						</table>
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




<script src="assets/jquery-1.10.2.min.js"></script>

<script src="assets/jquery-ui.min.js" type="text/javascript"></script>

	<!-- Bootstrap -->
    <script src="assets/bootstrap.min.js"></script>
    
	<!-- Modernizr -->
	<script src="assets/modernizr.min.js"></script>
	
	<!-- Pace -->
	<script src="assets/pace.min.js"></script>
	
	<!-- Popup Overlay -->
	<script src="assets/jquery.popupoverlay.min.js"></script>
	
	<!-- Slimscroll -->
	<script src="assets/jquery.slimscroll.min.js"></script>
	
	<!-- Cookie -->
	<script src="assets/jquery.cookie.min.js"></script>

	<!-- Perfect -->
	<script src="assets/app.js"></script>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

	
	<script>
	
		$(function	()	{
		
			// Full calendar
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
					
			var calendar = $('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				selectable: true,
				selectHelper: true,
				 select: function(start, end, allDay) {
   var title = prompt('Event Title:');


   if (title) {
   var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
   $.ajax({
	   url: 'add_events.php',
	   data: 'title='+ title+'&start='+ start +'&end='+ end,
	   type: "POST",
	   success: function(json) {
	   alert('Added Successfully');
	   }
   });
   calendar.fullCalendar('renderEvent',
   {
	   title: title,
	   start: start,
	   end: end,
	   allDay: allDay
   },
   true
   );
   }
   calendar.fullCalendar('unselect');
   },
				editable: true,
				events: "events.php",
				eventRender: function(event, element, view) {
    if (event.allDay === 'true') {
     event.allDay = true;
    } else {
     event.allDay = false;
    }
   },
   editable: true,
   eventDrop: function(event, delta) {
   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
   $.ajax({
	   url: 'update_events.php',
	   data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
	   type: "POST",
	   success: function(json) {
	    alert("Updated Successfully");
	   }
   });
   },
   eventClick: function(event) {
	var decision = confirm("Do you really want to delete that?"); 
	if (decision) {
	$.ajax({
		type: "POST",
		url: "delete_event.php",
		data: "&id=" + event.id,
		 success: function(json) {
			 $('#calendar').fullCalendar('removeEvents', event.id);
			 // alert("Updated Successfully");
			 }
	});
	}
  	},
   eventResize: function(event) {
	   var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
	   var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
	   $.ajax({
	    url: 'update_events.php',
	    data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
	    type: "POST",
	    success: function(json) {
	    // alert("Updated Successfully");
	    }
	   });
	}
			});
		});
	</script>
	
	