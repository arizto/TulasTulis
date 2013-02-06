<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css">
<link rel="stylesheet" href="<?=base_url()?>css/bootstrap-responsive.css">
<link rel="stylesheet" href="<?=base_url()?>css/jquery.fancybox.css">
<link rel="stylesheet" href="<?=base_url()?>css/uniform.default.css">
<link rel="stylesheet" href="<?=base_url()?>css/jquery.cleditor.css">
<link rel="stylesheet" href="<?=base_url()?>css/jquery.plupload.queue.css">
<link rel="stylesheet" href="<?=base_url()?>css/jquery.tagsinput.css">
<link rel="stylesheet" href="<?=base_url()?>css/jquery.ui.plupload.css">
<link rel="stylesheet" href="<?=base_url()?>css/chosen.css">
<link rel="stylesheet" href="<?=base_url()?>css/jquery.jgrowl.css">
<link rel="stylesheet" href="<?=base_url()?>css/style.css">
</head>
<body>				

<div class="topbar">
	<div class="container-fluid">
		<a href="dashboard.html" class='company'>tulastulis</a>
		<ul class='mini'>
			<li class='dropdown dropdown-noclose supportContainer'>
				<a href="#" class='dropdown-toggle' data-toggle="dropdown">
					<img src="<?=base_url()?>img/icons/fugue/book-question.png" alt="">
					Notifications
					<span class="label label-success">5</span>
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
					<li class='custom'>
						<div class="title">
							commented on your post
							<span>Oct 26, 2012 by <a href="#" class='pover' data-title="View Comment" data-content="Here is the comment">iputu</a></span>
						</div>
					</li>
					<li class="custom">
						<div class="expand_custom">
							<a href="#">Show all notifications</a>
						</div>
					</li>
				</ul>
			</li>
			<li class='dropdown pendingContainer'>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<img src="<?=base_url()?>img/icons/fugue/document-task.png" alt="">
					Subscribers
					<span class="label label-info">1</span>
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
					<li class='custom'>
						<div class="title">
							iputu wants to subscribe to bukuharian A
							<span>Oct 26, 2012 by <a href="#" class='pover' data-title="iputu" data-content="User information comes here">iputu</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Accept"><img src="<?=base_url()?>img/icons/essen/16/check.png" alt=""></a>
							</div>
						</div>
					</li>
				</ul>
			</li>
			<li class='dropdown messageContainer'>
				<a href="#" class='dropdown-toggle' data-toggle='dropdown'>
					<img src="<?=base_url()?>img/icons/fugue/balloons-white.png" alt="">
					Messages
					<span class="label label-warning">3</span>
				</a>
				<ul class="dropdown-menu pull-right custom custom-dark">
					<li class='custom'>
						<div class="title">
							Hello, whats your name?
							<span>Oct 26, 2012 by <a href="#" class='pover' data-title="iputu" data-content="User information comes here">iputu</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class='tip btn btn-mini' title="Show message"><img src="<?=base_url()?>img/icons/fugue/magnifier.png" alt=""></a>
								<a href="#" class='tip btn btn-mini' title="Reply message"><img src="<?=base_url()?>img/icons/fugue/mail-reply.png" alt=""></a>
							</div>
						</div>
					</li>
				</ul>
			</li>
			<li>
				<a href="#">
					<img src="<?=base_url()?>img/icons/fugue/gear.png" alt="">
					Settings
				</a>
			</li>
			<li>
				<a href="index.html">
					<img src="<?=base_url()?>img/icons/fugue/control-power.png" alt="">
					Logout
				</a>
			</li>
		</ul>
	</div>
</div>

<div class="main">
	<div class="navi">
		<ul class='main-nav'>
			<li class='active'>
				<a href="dashboard.html" class='light'>
					<div class="ico"><i class="icon-home icon-white"></i></div>
					Dashboard
				</a>
			</li>
			<li>
				<a href="forms.html" class='light'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					Diaries
				</a>
			</li>
		</ul>
	</div>