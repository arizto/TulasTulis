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