<?php
	echo form_open('login/validate_login');
	echo form_input('username', 'Username');
	echo '<br>';
	echo form_password('password', 'Password');
	echo '<br>';
	echo form_submit('submit', 'Login');
	echo form_close();
?>