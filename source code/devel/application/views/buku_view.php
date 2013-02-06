<div> 
		<h3 align="center"><font size="18" color="#FFE4E1"><?php echo $buku->nama_bukuharian; ?></font></h3>
		
		<div class="photo fotocover">
		<span></span><em></em>
		<img src="<?=base_url().'uploads/'.$buku->cover;?>"/>
		</div>
</div>
<?php 
if($buku_row != null ){
	foreach ($buku_row as $row) { ?>  
	<div> 
	<div id="isibuku">
		<h3><?php echo $row->title; ?></h3>
		<p><?php echo $row->content; ?></p>
	</div>
		<div id="comment">
	 <?php
	       $attributes = array('id' => 'FormComment'.$row->id_content);
			echo form_open_multipart('utama/insert_comment',$attributes);  
			echo form_hidden('id_content',$row->id_content); 
		?>
			<fieldset>
				<label>Comment</label>
				<textarea rows="5" name='comment' class='comment'></textarea>
			</fieldset>
			<input type="submit" name="category" value="Masukkin" class="alt_btn">
			<?php echo form_close(); ?>
	 </div>
	
	</div>
<?php 

echo '
<script type="text/javascript">
$(document).ready(function() {
       $("#FormComment'.$row->id_content.'").submit(function(event){
	    event.preventDefault(); 
          $.post( 
             "utama/insert_comment",
             $("#FormComment'.$row->id_content.'").serialize(),
             function(data) {
                alert("Komentar Sukses Dimasukkin");
             }

          );
      });
   });
</script>	';				 
?>	     
			
<?php
}

echo "<div> 
		<h3 align='center'><font size='25' color='#FFE4E1'> To Be Continued</font></h3>
	  </div>";
}
else{
	echo "	<div> 
			<h3>Belum Ada Judul</h3>
			<p>MaCih kosong Gan,Diisi Donk..!</p>
			</div>";
}

?>

<script type="text/javascript">
	$(function() {
	//single book
	$("#mybook").booklet({
	width:1000,
	height:800,
	closed: true,
	covers:true,
	autoCenter: true,
	shadows : true,
	arrows : true
	});
	});

</script>


	
