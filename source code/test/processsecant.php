<?php
$fungsi=$_POST['fungsi'];
$x0=$_POST['x0'];
$x1=$_POST['x1'];
$dp=4;
?>

	<table border="1">
		<tr>
			<th>r</th>
			<th>Xr-1</th>
			<th>Xr</th>
			<th>Xr+1</th>
			<th>f(Xr-1)</th>
			<th>f(Xr)</th>
			<th>|Xr+1 - Xr|</th>
		</tr>

<?php
for($i=0; $i<=15; $i++){	
	$x=$x0;
	$fxrm1=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$fxrm1= number_format($fxrm1, $dp, '.', '');
	
	$x=$x1;
	$fxr=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$fxr= number_format($fxr, $dp, '.', '');
	
	$xr1=$x1-($fxr*($x1-$x0))/($fxr-$fxrm1);
	$xr1= number_format($xr1, $dp, '.', '');
	
	$nabs=$xr1-$x1;
	$nabs= number_format($nabs, $dp, '.', '');
	$nabs=abs($nabs);
?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $x0;?></td>
			<td><?php echo $x1;?></td>
			<td><?php echo $xr1;?></td>
			<td><?php echo $fxrm1;?></td>
			<td><?php echo $fxr;?></td>
			<td><?php echo $nabs;?></td>
		</tr>
<?php
	$x0=$x1;
	$x1=$xr1;
}
?>
</table>