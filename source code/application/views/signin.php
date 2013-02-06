    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">TulasTulis.com</a>
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
        <div class="span4 offset4">
			<div class="well">
			<?php
				echo form_open('account/validate_login');
			?>
			<div class="page-header">
				<h1>Sign In!</h1>
			</div>
			  <div class="control-group">
				<div class="controls">
				  <input type="text" id="email" name="email" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <input type="password" id="password" name="password" placeholder="Password">
				</div>
			  </div>
				
			  <div class="control-group">
			  	<div class="controls">
					<button type="submit" class="btn btn-success">Sign In</button>
					<a href="<?php echo base_url();?>account/forgot_password" class="pull-right">Forgot Password</a>
				</div>
			  </div>
			<?php
				echo form_close();
			?>
			<div class="control-group error"></div>
			<div class="control-group success"></div>
			</div>
        </div><!--/span-->
      </div><!--/row-->
      <hr>