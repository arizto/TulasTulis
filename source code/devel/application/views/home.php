    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">tulastulis</a>
          <div class="nav-collapse collapse">

			<ul class="nav pull-right">
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				  <img class="avatar" src="<?php base_url(); ?>assets/img/picture-avatar.jpg" alt="Mafaik"> Sign In <b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
				  <li>
					<form style="margin: 0px" accept-charset="UTF-8" action="<?php echo base_url().'account/validate_login';?>" method="post">
						<fieldset class='textbox' style="padding:10px">
							<input style="margin-top: 8px" type="text" name="email" placeholder="Email" />
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
        <div class="span3 pull-right">
			<div class="well">
			<?php
				$attributes = array('id' => 'registerHere');
				echo form_open('account/signup', $attributes);
			?>
			<div class="page-header">
				<h1>Sign Up Now!</h1>
			</div>
			  <div class="control-group">
				<div class="controls">
				  <input type="text" id="email" name="email" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <input type="text" id="accountname" name="accountname" placeholder="Account Name">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <input type="password" id="password" name="password" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
			  	<div class="controls">
					<button type="submit" class="btn btn-success btn-medium">Sign Up</button>
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