
	<section id="main" class="column" >
		
		<h4 class="alert_info">Pesan Selamat Datang :*
		<canvas  id="myCanvas" width="50" height="30" >
		</canvas>
		</h4>
		
	
		
			<div class="clear"></div>
			</div>
		
		<article class="module width_full">
		<?php  
     if (empty($datacat)) {  
         $datacat->id_bukuharian = '';  
       $datacat->nama_bukuharian = '';  
       $datacat->id_account = '';    
       $datacat->cover = '';   
	   $datacat->status = ''; 
      $type = 'insert';   
     } else {  
      $type = 'update';  
     }  
    ?>  
			<header><h3>Tambah Buku Harian</h3></header>
				<div class="module_content">
				<?php  
             echo form_open_multipart('category/'.$type);  
       echo form_hidden('id_bukuharian',$datacat->id_bukuharian);  
	   echo form_hidden('cover_asli',$datacat->cover); 
	     
      ?>  
	  
						<fieldset>
							<label>Judul Buku Harian</label>
							<input type="text" name="nama_bukuharian" size='100' value='<?php echo $datacat->nama_bukuharian; ?>'>
						</fieldset>
					
						<fieldset style="width:47%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Cover</label>
							<?php //echo form_upload('cover'); ?>
							<input type="file" style="width:92%;" name="cover" size="50" value=''> 
							<img src='<?=base_url()?>uploads/<?php echo $datacat->cover;?>' width='100' height='300'>
						</fieldset>
						
						<fieldset style="width:46%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Status</label>
							<?php //echo form_upload('cover'); ?>
							<select style="width:95%;" name="status">
							<?php
							if($type=="insert")
							{
							?>
							<option value='0' SELECTED>published</option>
							<option value='1' >private</option>
							<?php
							}
							else
							{
								if($datacat->status == 0)
								{
									echo "<option value='0' SELECTED>published</option>
										  <option value='1' >private</option>";	
								}
								else if($datacat->status == 1)
								{
									echo "<option value='0' >published</option>
										  <option value='1' SELECTED>private</option>";	
								}
							}
							?>
							</select>
						</fieldset>
						
						<div class="clear"></div>
						
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" name="category" value="Simpan" class="alt_btn">
					<?php echo form_close(); ?>
				</div>
			</footer>
		</article><!-- end of post new article -->
		
		<!-- pesan2

		<h4 class="alert_warning">A Warning Alert</h4>
		
		<h4 class="alert_error">An Error Message</h4>
		
		<h4 class="alert_success">A Success Message</h4>
		
		-->
		
		<!-- emboh kah
		<article class="module width_full">
			<header><h3>Basic Styles</h3></header>
				<div class="module_content">
					<h1>Header 1</h1>
					<h2>Header 2</h2>
					<h3>Header 3</h3>
					<h4>Header 4</h4>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

<p>Donec id elit non mi porta <a href="#">link text</a> gravida at eget metus. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

					<ul>
						<li>Donec ullamcorper nulla non metus auctor fringilla. </li>
						<li>Cras mattis consectetur purus sit amet fermentum.</li>
						<li>Donec ullamcorper nulla non metus auctor fringilla. </li>
						<li>Cras mattis consectetur purus sit amet fermentum.</li>
					</ul>
				</div>
		</article><!-- end of styles article -->
		
		<!-- <div class="spacer"></div> -->
	</section>
	
