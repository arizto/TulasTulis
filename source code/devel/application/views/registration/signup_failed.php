    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">TulasTulis</a>
          <div class="nav-collapse collapse">

			<ul class="nav pull-right">
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				  <img class="avatar" src="<?php echo base_url(); ?>assets/img/picture-avatar.jpg" alt="Mafaik"> Sign In <b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
				  <li>
					<form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post">
						<fieldset class='textbox' style="padding:10px">
							<input style="margin-top: 8px" type="text" name="username" placeholder="Username" />
							<input style="margin-top: 8px" type="password" name="password" placeholder="Passsword" />
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
			<div class="page-header">
				<center>
				<h1>Failed To Activate Your Account!</h1>
				<h4>Please Check Your Key</h4>
				<h3>Or Resend Your Activation Key</h3>
				</center>
			</div>
			</div>
        </div><!--/span-->
      </div><!--/row-->
      <hr>

      <footer>
        <p>&copy;2012 - TulasTulis.com</p>
      </footer>

    </div><!--/.fluid-container-->