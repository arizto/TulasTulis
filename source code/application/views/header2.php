<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="<?=base_url()?>css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?=base_url()?>css/jquery-ui.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?=base_url()?>css/jquery.timepicker.css" type="text/css" media="screen" />
	
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="<?=base_url()?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/jquery-ui.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/jquery.timepicker.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/hideshow.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=base_url()?>js/jquery.equalHeight.js"></script>
	
 

</head>


<body onload="onload()">

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="<?=base_url()?>">Buku Harian</a></h1>
			<h2 class="section_title">Dashboard</h2>
			<div class="btn_view_site">
				<a href="<? echo base_url().$this->session->userdata('account_name');; ?>">View Site</a>
				<a href="<?=base_url()?>account/signout">Signout</a>
			</div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>John Doe (<a href="#">3 Messages</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
	<!--
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		
	
	<hr/>-->
		<h3>Content</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="<?php echo base_url();?>dashboard/insert_view">New Article</a></li>
			<li class="icn_edit_article"><a href="<?=base_url()?>dashboard">Edit Articles</a></li>
			<li class="icn_categories"><a href="<?=base_url()?>category">Buku Harian</a></li>
			<li class="icn_tags"><a href="#">Tags</a></li>
		</ul>
		<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="#">Add New User</a></li>
			<li class="icn_view_users"><a href="#">View Users</a></li>
			<li class="icn_profile"><a href="#">Your Profile</a></li>
		</ul>
		<h3>Media</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="#">File Manager</a></li>
			<li class="icn_photo"><a href="#">Gallery</a></li>
			<li class="icn_audio"><a href="#">Audio</a></li>
			<li class="icn_video"><a href="#">Video</a></li>
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Options</a></li>
			<li class="icn_security"><a href="#">Security</a></li>
			<li class="icn_jump_back"><a href="#">Logout</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2012 IpuTuCudaRmaAdiCeptiantoDiCayanGSemuAnA</strong></p>
			<p>Theme by <a href="http://www.medialoot.com">PuTu</a></p>
		</footer>
	</aside><!-- end of sidebar -->