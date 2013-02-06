<?php  
	if (empty($datacontent)) {  
		$datacontent->id_content = '';  
		$datacontent->id_bukuharian = '';  
		$datacontent->date = '';   
		$datacontent->time = ''; 		 
		$datacontent->title = '';  
		$datacontent->content = '';		 
		$type = 'insert';   
	}else{  
		$type = 'update';  
	}  
?> 

<div class="container-fluid">
	<div class="content">
		<div class="row-fluid">
			<div class="span12">
				<div class="box">
					<div class="box-head">
						<h3>Pages Form</h3>
					</div>
					<div class="box-content">
						<?php
							$attributes = array('class' => 'form-horizontal');
							echo form_open_multipart('dashboard/'.$type, $attributes);  
							echo form_hidden('id_content',$datacontent->id_content); 
						?>
							<fieldset>
								<legend>Edit Page</legend>
								
								<div class="control-group">
									<label for="basic" class="control-label">Page Title</label>
									
									<div class="controls">
										<input type="text" name="title" id="title" class='input-square' value="<?php echo  $datacontent->title ?>">
									</div>
								</div>		

								<div class="control-group">
									<label for="textcounter" class="control-label">Page Content</label>
									<div class="controls">
										<textarea name="content" class='span12 cleditor'><?php echo  $datacontent->content ?></textarea>
									</div>
								</div>

								<div class="control-group">
									<label for="select" class="control-label">Book</label>
									<div class="controls">
										<select name="id_bukuharian" id="id_bukuharian">
											<?php 
												if($type=="insert"){
													if($category_row != null ){
														foreach ($category_row as $row){ 
															echo "<option value='$row->id_bukuharian' SELECTED>$row->nama_bukuharian</option>";
														}
													}else{
														echo "<option value='' SELECTED>BUKU HARIAN BELUM ADA</option>";
													}
												}elseif($type=="update"){
													if($category_row != null ){
														foreach ($category_row as $row) { 
															if($row->id_bukuharian == $datacontent->id_bukuharian){
																echo "<option value='$row->id_bukuharian' SELECTED>$row->nama_bukuharian</option>";
															}else{
																echo "<option value='$row->id_bukuharian'>$row->nama_bukuharian</option>";
															}
														}
													}
												}	
											?>  
										</select>
									</div>
								</div>	
								
								<?php 
									if($type=='insert'){
										$dateskrg = date('Y-m-d');
										$timeskrg = date('H:i:s');
								?>
								
								<div class="control-group">
									<label for="datepicker" class="control-label">Tanggal</label>
									<div class="controls">
										<input type="text" name="date" id="date" value="<?php echo  $dateskr ?>">
									</div>
								</div>
								
								<div class="control-group">
									<label for="timepicker" class="control-label">Waktu</label>
									<div class="controls">
										<input type="text" name="time" id="time" value="<?php echo $timeskrg; ?>">
									</div>
								</div>	
								
								<?php
									}else{
								?>

								<div class="control-group">
									<label for="datepicker" class="control-label">Tanggal</label>
									<div class="controls">
										<input type="text" name="date" id="date" value="<?php echo  $datacontent->date ?>">
									</div>
								</div>
								
								<div class="control-group">
									<label for="timepicker" class="control-label">Waktu</label>
									<div class="controls">
										<input type="text" name="time" id="time" value="<?php echo  $datacontent->time ?>">
									</div>
								</div>	
								
								<?php
								}
								?>	

								<div class="form-actions">
									<input type="submit" class='btn btn-primary' value="Save">
								</div>	
								<?php echo form_close(); ?>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>