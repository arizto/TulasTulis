<?php
$fungsi=$_POST['fungsi'];
$awal=$_POST['awal'];
$sebelum=$_POST['awal'];
$dp=4;
?>

	<table border="1">
		<tr>
			<th>r</th>
			<th>Xr</th>
			<th>Xr-1</th>
			<th>|Xr - Xr-1|</th>
		</tr>
		<tr>
			<td>0</td>
			<td><?php echo $awal;?></td>
			<td></td>
			<td></td>
		</tr>

<?php
for($i=1; $i<=15; $i++){	
	$x=$awal;
	$xr=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$xr=sqrt($xr);
	$xr= number_format($xr, $dp, '.', '');
	
	$x=$sebelum;
	$xr1=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$xr1=sqrt($xr);
	$xr1= number_format($xr, $dp, '.', '');
	
	$nabs=$xr-$awal;
	$nabs= number_format($nabs, $dp, '.', '');
	$nabs=abs($nabs);
?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $xr;?></td>
			<td><?php echo $awal;?></td>
			<td><?php echo $nabs;?></td>
		</tr>
<?php
	$awal=$xr;
	$sebelum=$xr1;
}
?>
</table>