<?php
$fungsi=$_POST['fungsi'];
$selanga=$_POST['selanga'];
$selangb=$_POST['selangb'];

$dp=4;
?>

	<table border="1">
		<tr>
			<th>r</th>
			<th>a</th>
			<th>b</th>
			<th>c</th>
			<th>f(a)</th>
			<th>f(b)</th>
			<th>f(c)</th>
			<th>new a</th>
			<th>new b</th>
			<th>lebar</th>
		</tr>

<?php
for($i=0; $i<=15; $i++){
	$c=($selanga+$selangb)/2;
	$c= number_format($c, $dp, '.', '');
	
	$x=$selanga;
	$fa=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$fa= number_format($fa, $dp, '.', '');
	
	$x=$selangb;
	$fb=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$fb= number_format($fb, $dp, '.', '');
	
	$x=$c;
	$fc=eval('return ' . preg_replace('/([a-zA-Z])+/', '\$$1', $fungsi) . ';');
	$fc= number_format($fc, $dp, '.', '');
	
	if(($fa*$fc) < 0){
		$newa=$selanga;
		$newa= number_format($newa, $dp, '.', '');
		$newb=$c;
		$newb= number_format($newb, $dp, '.', '');
	}else if(($fc*$fb) < 0){
		$newa=$c;
		$newa= number_format($newa, $dp, '.', '');
		$newb=$selangb;		
		$newb= number_format($newb, $dp, '.', '');
	}
	
	$lebar=$newb-$newa;
	$lebar= number_format($lebar, $dp, '.', '');
?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $selanga;?></td>
			<td><?php echo $selangb;?></td>
			<td><?php echo $c;?></td>
			<td><?php echo $fa;?></td>
			<td><?php echo $fb;?></td>
			<td><?php echo $fc;?></td>
			<td><?php echo $newa;?></td>
			<td><?php echo $newb;?></td>
			<td><?php echo $lebar;?></td>
		</tr>
<?php
	$selanga=$newa;
	$selangb=$newb;
}
?>
</table>