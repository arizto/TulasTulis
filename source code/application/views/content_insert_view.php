

	<section id="main" class="column" >

		

		<h4 class="alert_info">Pesan Selamat Datang :*

		<canvas  id="myCanvas" width="50" height="30" >

		</canvas>

		</h4>

		

	

		

			<div class="clear"></div>

			</div>

		

		<article class="module width_full">

		<?php  

     if (empty($datacontent)) {  

         $datacontent->id_content = '';  

		 $datacontent->id_bukuharian = '';  

		 $datacontent->date = '';   

		 $datacontent->time = ''; 		 

		 $datacontent->title = '';  

		 $datacontent->content = '';		 

		 $type = 'insert';   

		} else {  

		 $type = 'update';  

     }  

    ?>  

			<header><h3>Tambah Konten</h3></header>

				<div class="module_content">

				<?php  

					echo form_open_multipart('dashboard/'.$type);  

					echo form_hidden('id_content',$datacontent->id_content);  

	     

				?>  

	  

						<fieldset>

							<label>Judul Konten</label>

							<input type="text" name="title" size='100' value='<?php echo  $datacontent->title ?>'>

						</fieldset>

						<fieldset>

							<label>Isi Konten</label>

							<textarea rows="12" name='content'><?php echo  $datacontent->content ?></textarea>

						</fieldset>

						<fieldset style="width:43%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->

							<label>Buku Harian</label>

							<select style="width:88%;" name="id_bukuharian">

							<?php 

								if($type=="insert")

								{

									if($category_row != null ){

									

									 

										foreach ($category_row as $row) { 

											echo "<option value='$row->id_bukuharian' SELECTED>$row->nama_bukuharian</option>";

										}

									

									

									}

									else{

										echo "<option value='' SELECTED>BUKU HARIAN BELUM ADA</option>";

									}

								}

								elseif($type=="update")

								{

									if($category_row != null ){

									

									 

										foreach ($category_row as $row) { 

											if($row->id_bukuharian == $datacontent->id_bukuharian){

												echo "<option value='$row->id_bukuharian' SELECTED>$row->nama_bukuharian</option>";

											}

											else{

												echo "<option value='$row->id_bukuharian'>$row->nama_bukuharian</option>";

											}

										}

									

									

									}

								}	

							?>  

							</select>

						</fieldset>
						
						<?php 
						if($type=='insert'){
						$dateskrg = date('Y-m-d');
						$timeskrg = date('H:i:s');
						?>
						
						<fieldset style="width:20%; float:left;margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Tanggal Kejadian</label>
							<input type="text" name='date' id='date' style="width:75%;" size="50" value="<?php echo $dateskrg; ?>">
						</fieldset>
						<fieldset style="width:20%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Waktu Kejadian</label>
							<input type="text" name='time' id='time' style="width:75%;" size="50" value="<?php echo $timeskrg; ?>">
						</fieldset>
						
						<?php
						}
						else{
						?>

						<fieldset style="width:20%; float:left;margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->

							<label>Tanggal Kejadian</label>

							<input type="text" name='date' id='date' style="width:75%;" size="50" value="<?php echo  $datacontent->date ?>">

						</fieldset>

						<fieldset style="width:20%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->

							<label>Waktu Kejadian</label>

							<input type="text" name='time' id='time' style="width:75%;" size="50" value="<?php echo  $datacontent->time ?>">

						</fieldset>
						
						<?php
						}
						?>

				<div class="clear"></div>

				</div>

						

				</div>

			<footer>

				<div class="submit_link">

					<input type="submit" name="category" value="Simpan" class="alt_btn">

					<?php echo form_close(); ?>

				</div>

			</footer>

		</article><!-- end of post new article -->

		

		

	</section>

	



<script type="text/javascript">



$(function() {

$("#date").datepicker({dateFormat: 'yy-mm-dd'});



});



</script>  



<script type="text/javascript">



$(document).ready(function(){

    $('#time').timepicker({

		timeFormat: 'HH:mm:ss',

        interval: 15 // 15 minutos

	});

});



</script>



	

