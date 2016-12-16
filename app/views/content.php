
<div class="postcontent">
 <?php
   foreach ($allPost as $key => $value) {

  ?>
	<div class="post">
		<h2>
			<a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>"><?php echo $value['post_title']; ?>
			</a>
		</h2>
		<p>
			<?php
			$text = $value['post_content'];
			 if(strlen($text) > 200)
			 {
			 	$text = substr($text, 0,200);
			 	echo $text;
			 }  
			 ?>	
		 </p>
		<div class="readmore">
			<a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>">Readmore
			</a>
		</div>
	</div>

<?php } ?>

</div>
 

