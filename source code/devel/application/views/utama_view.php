
	<?php
	$query = $this->db->get_where('tb_bukuharian', array('id_account' => $id_account));
	$count = $query->num_rows(); 
	$jml_pagination = ceil($count / 4);
	for($i=1; $i<=$jml_pagination; $i++)
	{
		$pageterakhir=$i;
	}

	?>

	
	<section id="main" class="column" >	
		
		
			<div class="clear"></div>
			</div>
		<!--content manager -->
		<article class="module width_3_quarter">
		<header>
		<h3 class="tabs_involved">List Diaryku</h3>
		
		</header>

		<div class="tab_container">
			<div class="contentlistbuku">
			
			
			
			</div>
			<?php
			if($cat_row != null ){	
			?>
			<ul id="pagination">
			<?php
			//Pagination Numbers
			for($i=1; $i<=$jml_pagination; $i++)
			{
			echo '<li p="'.$i.'">'.$i.'</li>';
			}

			?>
			</ul>
			
			<?php
			}
			?>
		</div>
		
		</article>
		<div class="clear"></div>
		
<article class="module width_full_100">
<header><h3>Bukuku</h3></header>
<div class="contentbuku">

<div id="mybook">


</div>
</div>
</article>
</section>	

<script type="text/javascript">
 
  $(document).ready(function() {
			function loadData(page)
		{ 
			$.ajax
			({
			type: "POST",
			url: "utama/list_buku",
			data: "page="+page,
			success: function(msg)
			{
			$(".contentlistbuku").ajaxComplete(function(event, request, settings)
			{
	
			$(".contentlistbuku").html(msg);
			});
			}
			});
		}
		
		loadData(1); // For first time page load default results
		
		$('#pagination li').live('click',function(){
			var page = $(this).attr('p');
			loadData(page);
			});
			
      
   });
   
</script>



	

