<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="index3.html" class="nav-link">Home</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="#" class="nav-link">Contact</a>
			</li>
		</ul>

		<!-- SEARCH FORM -->
		<form class="form-inline ml-3">
			<div class="input-group input-group-sm">
				<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-navbar" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<li class="dropdown user user-menu" style="width: 300px;text-align: right;">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
	              <span class="hidden-xs"><?php echo $this->ion_auth->user()->row()->username; ?></span>
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
	                <img src="<?php echo base_url().'assets/dist/img/user2-160x160.jpg' ?>" class="img-circle" alt="User Image">
	              </li>
	            
	              <!-- Menu Footer-->
	              <li class="user-footer d-flex justify-between">
	                <div class="w-50">
	                  <a href="#" class="btn btn-default btn-flat">Profile</a>
	                </div>
	                <div class="w-50 text-right">
	                  <a href="<?php echo base_url().'auth/logout' ?>" class="btn btn-default btn-flat">Sign out</a>
	                </div>
	              </li>
	            </ul>
	        </li>
		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
	
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
				<div class="image text-center">
					<a href="<?php echo base_url().'/admin' ?>">
						<img src="<?php echo base_url().'/assets/logo.png' ?>" class="w-50" alt="User Image">
					</a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-item">
						<a href="<?php echo base_url().'admin' ?>" class="nav-link">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p class="pl-1">
								Dashboard
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url().'labors/' ?>" class="nav-link">
							<i class="nav-icon fas fa-user"></i>
							<p class="pl-2">
								Labors
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url().'labors/' ?>" class="nav-link">
							<i class="nav-icon fas fa-money-check-alt"></i>
							<p class="pl-2">
								Labors Wages
							</p>
						</a>
					</li>
					<li class="nav-item">
		                <a href="<?php echo base_url().'gallery/' ?>" class="nav-link">
		                  <i class="far fa-circle nav-icon"></i>
		                  <p class="pl-2">Gallery</p>
		                </a>
             		</li>
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->