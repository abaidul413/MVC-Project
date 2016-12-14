
Home
<hr/>
<div class="postcontent">
 <?php
   foreach ($postByCat as $key => $value) {

  ?>
	<div class="post">
	  <div class="title">
  	 	<h2><?php echo $value['post_title']; ?></h2>
  	 	<p>Category:<?php echo $value['cat_name']; ?>
  	 	</p>
  	  </div>
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
 

