    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li>
					<center><img alt="Mafaik" class="face" src="assets/img/mafaik.jpg" title="Mafaik's Avatar"></center>
					<div class="account-details">
						<span class="account-name">
							Mafaik
						</span>
						<span class="account-actions">
							<a href="javascript:;">Profile</a> |
							<a href="javascript:;">Edit Settings</a>
						</span>
					</div>
			  </li>
            </ul>
          </div><!--/.well -->
		
        </div><!--/span-->
		</div>

	<div class="row-fluid">
	<div class="content">
		<div class="row-fluid">
			<div class="span12">
				<div class="box">
					<div class="box-head tabs">
						<h3>Content Manager</h3>
					</div>
					<div class="box-content box-nomargin">
								<table class='table table-striped dataTable dataTable-noheader table-bordered'>
									<thead>
										<tr>
											<th>Judul</th>
											<th>Buku Harian</th>
											<th>Tanggal</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											if($content_row != null ){
												foreach ($content_row as $row){ ?>  
													<tr> 
														<td><?php echo $row->title;?></td> 
														<td><?php echo $row->nama_bukuharian;?></td> 
														<td><?php echo $row->date.' '.$row->time;?></td> 
														<td>	
															<div class="action">
																<div class="btn-group">
																	<center>
																	<a href="<?php echo base_url('dashboard/edit/'.$row->id_content);?>" class='tip btn btn-mini' title="Edit"><img src="<?=base_url()?>img/icons/essen/16/edit.png" alt=""></a>
																	<a href="<?php echo base_url('dashboard/delete/'.$row->id_content);?>" class='tip btn btn-mini' title="Delete"><img src="<?=base_url()?>img/icons/fugue/cross.png" alt=""></a>
																	</center>
																</div>
															</div>
														</td> 
													</tr> 
										<?php  
												}  
											}else{
												echo "<tr> 
														<td></td> 
														<td></td> 
													</tr> ";
											}
										?> 
									</tbody>
								</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>