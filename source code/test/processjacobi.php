<?php
$fungsix=$_POST['fungsix'];
$fungsiy=$_POST['fungsiy'];
$fungsiz=$_POST['fungsiz'];
$nx=$_POST['nx'];
$ny=$_POST['ny'];
$nz=$_POST['nz'];
$dp=4;
?>

	<table border="1">
		<tr>
			<th>r</th>
			<th>X</th>
			<th>Y</th>
			<th>Z</th>
			<th>|Xr+1 - Xr|</th>
			<th>|Yr+1 - Yr|</th>
			<th>|Zr+1 - Zr|</th>
		</tr>
		<tr>
			<td>0</td>
			<td><?php echo $nx;?></td>
			<td><?php echo $ny;?></td>
			<td><?php echo $nz;?></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

<?php
for($i=1; $i<=15; $i++){	
	$y=$ny;
	$z=$nz;
	$xr1=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsix) . ';');
	$xr1= number_format($xr1, $dp, '.', '');
	
	$x=$nx;
	$z=$nz;
	$yr1=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsiy) . ';');
	$yr1= number_format($yr1, $dp, '.', '');
	
	$x=$nx;
	$y=$ny;
	$zr1=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsiz) . ';');
	$zr1= number_format($zr1, $dp, '.', '');
	
	$nabsx=$xr1-$nx;
	$nabsx= number_format($nabsx, $dp, '.', '');
	$nabsx=abs($nabsx);
	
	$nabsy=$yr1-$ny;
	$nabsy= number_format($nabsy, $dp, '.', '');
	$nabsy=abs($nabsy);
	
	$nabsz=$zr1-$nz;
	$nabsz= number_format($nabsz, $dp, '.', '');
	$nabsz=abs($nabsz);
?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $xr1;?></td>
			<td><?php echo $yr1;?></td>
			<td><?php echo $zr1;?></td>
			<td><?php echo $nabsx;?></td>
			<td><?php echo $nabsy;?></td>
			<td><?php echo $nabsz;?></td>
		</tr>
<?php
	$nx=$xr1;
	$ny=$yr1;
	$nz=$zr1;
}
?>
</table>