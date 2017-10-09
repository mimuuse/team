<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HOSPITAL MANAGMENT SYSTEM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
<style>
p{
  text-align:center;
  font-size:17px;
}
</style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect

-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HMS</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                      <i class="fa fa-user"></i>
                      </div>
                
      
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
          
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <!-- search form (Optional) -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>-->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="start.php"><i class="fa fa-link"></i> <span>HOME</span></a></li>
        <li><a href="modify.php"><i class="fa fa-link"></i> <span>PATIANT INFO</span></a></li>
         <li><a href="Dr_show.php"><i class="fa fa-th"></i> <span>DOCTORS</span></a></li>
         <li><a href="assign_table.php"><i class="fa fa-circle"></i> <span>PATIENT ASSIGN</span></a></li>
        <li class="treeview">
          <!--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>-->
          <!--<ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>-->
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
<!--
     |---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|-->

 <?php 
 include("config.php"); 
 $id = ""; $fname = "";$mname = "";  $lname = ""; $town = ""; $age = ""; $dates = ""; $address = "";
$occ = ""; $phone = ""; $status = ""; $gender = "";
 ?>


<div class="container">
  <br>
   
  <div class="container">
   <div class = "panel panel-primary col-md-9">
          <div class="panel-heading"><p>pateint registration form </p></div>
          <div class="panel-body col-sm-12">
						<div class="row">
              <div class="col-sm-12">
              <form  action = "insert.php" method="POST">
							<div class="col-sm-4 form-group">
								<label>First Name</label>
								<input type="text"  pattern="[A-Za-z\s]{10,30}*" placeholder="Enter First Name Here.." 
                class="form-control" name = "firstname"  value="<?php echo($fname);?>">
							</div>
							<div class="col-sm-4 form-group">
								<label>Middle Name</label>
								<input type="text"   pattern="[A-Za-z\s]{10,30}*" placeholder="Enter Last Name Here.."
                class="form-control"name = "middlename"  value="<?php echo($mname);?>">
							</div>
							<div class="col-sm-4 form-group">
								<label>Last Name</label>
								<input type="text"  pattern="[A-Za-z\s]{10,30}*" placeholder="Enter Last Name Here.."
                 class="form-control"name = "lastname"  value="<?php echo($lname);?>">
							</div>
												
						
						<div class="col-sm-6  form-group">
						<label  for="sel1">Town</label>
		  <select class="form-control" id="town" name = "town" 
      placeholder="select the city Name Here.."  value="<?php echo($town);?>">
			<option>muqdisho</option>
			<option>hargaisa</option>
			<option>bosaso</option>
			<option>galkacyo</option>
			<option>burco</option>
			<option>kismayo</option>
			<option>baydhaba</option>
			<option>afgooye</option>
			<option>dhusamareb</option>
			<option>qardho</option>
			<option>badhan</option>
			<option>ceerigaabo</option>
		  </select>
						</div>	
							<div class="col-sm-6 form-group">
								<label>age</label>
								<input type="number" placeholder="Enter age Here" 
                class="form-control"name = "age"  value="<?php echo($age);?>">
							</div>	
							<div class="col-sm-6 form-group">
								<label>Date</label>
								<input type="date" placeholder="Enter the Code Here.." 
                class="form-control"name = "dates"  value="<?php echo($dates);?>">
							</div>		
						
				
							<div class="col-sm-6 form-group">
								<label>Address</label>
								<input type="text"  pattern="[A-Za-z\s]{10,30}*" placeholder="Enter the Address Here.."
                 class="form-control"name = "address"  value="<?php echo($address);?>">
							</div>	
						
                        <div class="col-sm-12 form-group">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter Phone Number Here.." 
                            class="form-control"name = "phone"  value="<?php echo($phone);?>">
                        </div>
                       <div class="col-sm-6 form-group">
						<label>Martial Status: </label>
						&nbsp;&nbsp;<input type="radio" value="child" name = "status" cheked =true >Child
						&nbsp;&nbsp; <input type="radio" value="single" name = "status">Single
						&nbsp;&nbsp; <input type="radio" value="marriage" name = "status">Marriage
                        </div>					
                        		
                        <div class="col-sm-6 form-group">
                          <label>Gender:</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="male" name = "gender">Male
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="female" name = "gender">Female
                        <!--confirm buttun-->
						</div>	
						<div class="pull-right">	
						<button type="submit" class="btn btn-md btn-info" name = "registor">Registor</button>
				</div>	
				<div class="pull-left">	
						<button type="reset" class="btn btn-md btn-success" name = "reset">Reset</button>	
				</div>
				<div class="text-center"> <a href="start.php" class="btn btn-md btn-danger">Cancel</a> </div>
                          		
                        </div>
				</form>
				</div>
	</div>
	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>