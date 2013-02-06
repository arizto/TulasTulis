<?php
$fungsi=$_POST['fungsi'];
$x0=$_POST['x0'];
$x1=$_POST['x1'];
$dp=4;

	$x=$x0;
	$fxrm1=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$fxrm1= number_format($fxrm1, $dp, '.', '');
	
	$x=$x1;
	$fxr=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$fxr= number_format($fxr, $dp, '.', '');
	
	$xr1=$x1-(($fxr*($x1-$x0))/($fxr-$fxrm1));
	$xr1= number_format($xr1, $dp, '.', '');
	
	echo $fxrm1;
	echo "<br />";
	echo $fxr;
	echo "<br />";
	echo $xr1;
	echo "<br />";
?>