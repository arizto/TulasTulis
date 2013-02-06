<?php
$fungsi=$_POST['fungsi'];
$fungsiturunan=$_POST['fungsiturunan'];
$awal=$_POST['awal'];
$dp=4;
?>

	<table border="1">
		<tr>
			<th>r</th>
			<th>Xr</th>
			<th>Xr+1</th>
			<th>f(x)</th>
			<th>f'(x)</th>
			<th>|Xr+1 - Xr|</th>
		</tr>

<?php
for($i=0; $i<=15; $i++){	
	$x=$awal;
	$fxr=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$fxr= number_format($fxr, $dp, '.', '');
	
	$fxrt=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsiturunan) . ';');
	$fxrt= number_format($fxrt, $dp, '.', '');
	
	$xr=$awal;
	$xr1=$xr-($fxr/$fxrt);
	$xr1= number_format($xr1, $dp, '.', '');
	
	$nabs=$xr1-$xr;
	$nabs= number_format($nabs, $dp, '.', '');
	$nabs=abs($nabs);
?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $xr;?></td>
			<td><?php echo $xr1;?></td>
			<td><?php echo $fxr;?></td>
			<td><?php echo $fxrt;?></td>
			<td><?php echo $nabs;?></td>
		</tr>
<?php
	$awal=$xr1;
}
?>
</table>