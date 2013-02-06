
<table class="tablesorter" cellspacing="0"> 
			
				<?php 
			
			    if($utama_row != null ){
				echo "<tr>"; 
				foreach ($utama_row as $row) { ?>  
				
				
				
			
    				<td style="width: 100px">
					<div class="photo1 listfoto cover" name="<?php echo $row->id_bukuharian;?>">
					<span></span>
					<img src='<?=base_url().'uploads/'.$row->cover;?>' width='125' height='135'/>
					
					</div>
					</td> 
				
				<?php  
       }  
	   ?>
	   
	   </tr> 
	   <?php
	   }
	   else{
				echo "<tr> 
    				<td>List Buku Harianku masih kosong T.T</td> 
    				
				</tr> ";
		}
	
       ?> 
			
</table>

<script type="text/javascript">

$(document).ready(function() {
			
      $(".cover").click(function(event){
          $.post( 
             "utama/lihat_buku",
             { id_bukuharian: $(this).attr("name") },
             function(data) {
                $('#mybook').html(data);
             }

          );
      });
   });
   
</script>


