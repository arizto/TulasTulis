	<section id="main" class="column" >	
		<h4 class="alert_info">Pesan Selamat Datang :*
		<canvas  id="myCanvas" width="50" height="30" >
		</canvas>
		</h4>
		
	
		
			<div class="clear"></div>
			</div>
		<!--content manager -->
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Konten Manajer</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Postingmu</a></li>
    		<li><a href="#tab2">Komenmu</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					
    				<th>Judul</th> 
    				<th>Buku Harian</th> 
    				<th>Tanggal</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<?php 
			    if($content_row != null ){
				foreach ($content_row as $row) { ?>  
				<tr> 
    				<td><?php echo $row->title;?></td> 
					<td><?php echo $row->nama_bukuharian;?></td> 
					<td><?php echo $row->date.' '.$row->time;?></td> 
    				<td><a href="<?php echo base_url('dashboard/edit/'.$row->id_content);?>"><input type="image" src="<?=base_url()?>images/icn_edit.png" title="Edit"></a>
					<a href="<?php echo base_url('dashboard/delete/'.$row->id_content);?>"><input type="image" src="images/icn_trash.png" title="Trash"></td> </a>
				</tr> 
				<?php  
       }  
	   }
	   else{
				echo "<tr> 
    				<td></td> 
    				<td></td> 
				</tr> ";
		}
	
       ?> 
			</tbody> 
			</table>
			
			</div><!-- end of #tab1 -->
			
			<!--comment -->
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Comment</th> 
    				<th>Posted by</th> 
    				<th>Posted On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Mark Corrigan</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="<?=base_url()?>images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Ipsum Lorem Dolor Sit Amet</td> 
    				<td>Jeremy Usbourne</td> 
    				<td>6th April 2011</td> 
   				 	<td><input type="image" src="<?=base_url()?>images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Sit Amet Dolor Ipsum</td> 
    				<td>Super Hans</td> 
    				<td>10th April 2011</td> 
    				<td><input type="image" src="<?=base_url()?>images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Alan Johnson</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="<?=base_url()?>images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Dobby</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="<?=base_url()?>images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		
	</section>
	
