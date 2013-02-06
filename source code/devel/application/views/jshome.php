	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
	<script type="text/javascript">
	$(document).ready(function()
	{

	// Validation
	$("#registerHere").validate({
		rules:{
			accountname:{required:true,minlength: 4},
			password:{required:true,minlength: 6},
			email:{
				required:true,
				email: true
			}
		},

		messages:{
			email:{
			required:"Enter your email address",
			email:"Enter valid email address"},
			account:{
			required:"Enter your account name",
			minlength:"Account name must be minimum 4 characters"},
			password:{
			required:"Enter your password",
			minlength:"Password must be minimum 6 characters"}
		},

		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass)
		{
		$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass)
		{
		$(element).parents('.control-group').removeClass('error');
		$(element).parents('.control-group').addClass('success');
		}
	});
	});
	</script>