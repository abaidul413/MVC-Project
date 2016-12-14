
Post Details
<hr/>
<div class="postcontent">
 <?php
   foreach ($postById as $key => $value) {
    	
 ?>

  <div class="details">
  	 <div class="title">
  	 	<h2><?php echo $value['post_title']; ?></h2>
  	 	<p>Category:<a href="<?php echo BASE_URL ?>/Index/getPostByCat/<?php echo $value['category'] ?>"><?php echo $value['cat_name']; ?></a>
  	 	</p>
  	 </div>
  	 <div class="desc">
  	 	<p><?php echo $value['post_content']; ?></p>
  	</div>
  </div>

 <?php } ?>

</div>
 

