 <aside class="sidebar">
   <div class="widget">
    <h2>Category</h2>
    <ul>
    <?php
       foreach ($catList as $key => $value) {  
    
     ?>
    	<li><a href="<?php echo BASE_URL ?>/Index/getPostByCat/<?php echo $value['id'] ?>"><?php echo $value['cat_name']; ?></a></li>
  <?php } ?>
    </ul>
   </div>

   <div class="widget">
    <h2>Leatest Post</h2>
    <ul>
     <?php
       foreach ($leatestPost as $key => $value) {

     ?>
    	<li><a href="<?php echo BASE_URL ?>/Index/postDetails/<?php echo $value['id'] ?>"><?php echo $value['post_title'] ?></a></li>
  <?php } ?>
    </ul>
   </div>
 </aside>
