<?php if(!empty($dealers)) {?>
				<div class="pagination clearfix">
					<?php 
				for($i= 1; $i<=ceil($total_rows/$limit); $i++){
					$page =$limit*($i-1);
					?>
			<a href="javascript:void(0)" class="<?php echo ($start ==$page)? 'active':''?>"  onClick="nextPage('<?php echo $page ?>')"><?php echo $i; ?></a >
<?php	}	?>

					
					
// ajax call to change start value						
<script>
function nextPage(limt){	
			
var url1= window.location.href;


		$.ajax({
                     url: url1,
                     type: "POST",
                     data: {limt},
                     success: function (response) {
                    
		$('#NextPage').html(response);
               
                     },
                });
				}
				
</script>								
