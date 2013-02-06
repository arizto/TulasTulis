<script type="text/javascript">
	$(document).ready(function () { 
            $('#time').timepicker({
				minuteStep: 1,
                showSeconds: true,
				secondStep: 15,
                showMeridian: false
			});
			
			$('#date').datepicker({
				format: 'yyyy-mm-dd'
			});
	});
</script>