<script type="text/javascript">
        function onload() {
            var drawingCanvas = document.getElementById('myCanvas');
 
            // Check the element is in the DOM and the browser supports canvas
            if (drawingCanvas.getContext) {
			var x=10;
			var y=0;
			var width=30;
			var height=30;
                var x0 = x + 0.5 * width, y0 = y + 0.3 * height;
   var x1 = x + 0.1 * width, y1 = y + 0.0 * height;
   var x2 = x + 0.0 * width, y2 = y + 0.6 * height;
   var x3 = x + 0.5 * width, y3 = y + 0.9 * height;
   var x4 = x + 1.0 * width, y4 = y + 0.6 * height;
   var x5 = x + 0.9 * width, y5 = y + 0.0 * height;

   var ctx = drawingCanvas.getContext("2d");
   ctx.save();

   ctx.beginPath();

   ctx.moveTo(x0,y0);
   ctx.bezierCurveTo(x1,y1,x2,y2,x3,y3);
   ctx.bezierCurveTo(x4,y4,x5,y5,x0,y0);
	ctx.lineCap = "round";
                ctx.lineWidth = 5;
                ctx.strokeStyle = "deeppink";
                ctx.fillStyle = "lightpink";
   ctx.stroke();
   ctx.fill();
   ctx.restore();
            }
        }
</script>


<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>