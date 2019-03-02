<?php if(!empty($dealers)) {?>
				<div class="pagination clearfix">
					<?php 
				for($i= 1; $i<=ceil($total_rows/$limit); $i++){
					$page =$limit*($i-1);
					?>
			<a href="javascript:void(0)" class="<?php echo ($start ==$page)? 'active':''?>"  onClick="nextPage('<?php echo $page ?>')"><?php echo $i; ?></a >
<?php	}	?>
