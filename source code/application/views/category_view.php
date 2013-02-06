	
	<section id="main" class="column" >
		
		<h4 class="alert_info">Pesan Selamat Datang :*
		<canvas  id="myCanvas" width="50" height="30" >
		</canvas>
		</h4>
		
	
		
			<div class="clear"></div>
			</div>
		<!--content manager -->
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Buku Harianmu</h3>
		<!--
		<ul class="tabs">
   			<li><a href="#tab1">Posts</a></li>
    	 <li><a href="#tab2">Comments</a></li>
		</ul> -->
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th>Judul Buku Harian</th> 
					<th></th>
    				<th>Aksimu</th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php 
			    if($category_row != null ){
				foreach ($category_row as $row) { ?>  
				<tr> 
    				<td><?php echo $row->nama_bukuharian;?></td> 
					<td width='250px'></td>
    				<td><a href="<?php echo base_url('category/edit/'.$row->id_bukuharian);?>"><input type="image" src="<?=base_url()?>images/icn_edit.png" title="Edit"></a>
					<a href="<?php echo base_url('category/delete/'.$row->id_bukuharian);?>"><input type="image" src="images/icn_trash.png" title="Trash"></td> </a>
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
				<footer>
				<div class="submit_link">
				<a href="<?=base_url()?>category/insert_view"><input type="image" src="<?=base_url()?>images/icn_new_article.png" title="Tambah Buku Harian">Tambah Buku Harian</a>
				</div>
				</footer>
			</div><!-- end of #tab1 -->
		  
			
		</div><!-- end of .tab_container -->
		
		 
		</article><!-- end of content manager article -->
		

		
	</section>
	
