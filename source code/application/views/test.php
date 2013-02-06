<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Buku Harian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
     .avatar {
        margin: -11px 5px -11px 0;
     }
     @media (max-width: 979px) {
       .avatar { width: 20px; height: 20px; margin-top: -14px; 
	 }
    </style>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
  </head>
  <body>
      <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Buku Harian</a>
          <div class="nav-collapse collapse">

			<ul class="nav pull-right">
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				  <img class="avatar" src="<?php base_url(); ?>assets/img/picture-avatar.jpg" alt="Mafaik"> Sign In <b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
				  <li>
					<form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post">
						<fieldset class='textbox' style="padding:10px">
							<input style="margin-top: 8px" type="text" name="username" placeholder="Username" />
							<input style="margin-top: 8px" type="password" name="password" placeholder="Passsword" />
							<label class="checkbox pull-left">
								<input type="checkbox"> Remember me
							</label>
							<input class="btn btn-primary pull-right" type="submit" value="Sign In" />
						</fieldset>
					</form>
				  </li>
				</ul>
			  </li>
			</ul>					
          </div><!--/.nav-collapse -->
		</div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span6 offset3">
			<div class="well">
			<?php
				echo form_open('signup');
			?>
			<div class="page-header">
				<center>
				<h1>Registration Success!</h1>
				<h4>Please Check Your Email To Activate Your Account!</h4>
				</center>
			</div>
			<?php
				echo form_close();
			?>
			</div>
        </div><!--/span-->
      </div><!--/row-->
      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->
	    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>