<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
<h2>Add Post</h2>
<?php 
  foreach ($getPostById as $key => $value) {

?>
<form action="<?php echo BASE_URL ?>/Admin/updatePost" method="post">
	<table>
	    <input type="hidden" name="id" value="<?php echo $value['id'] ?>" />
		<tr>
			<td>Post Name: </td>
			<td><input type="text" name="post_title" placeholder="Post Name..." value="<?php echo $value['post_title'] ?>" /></td>
		</tr>

		<tr>
			<td>Post Content: </td>
			<td>
			   <textarea name="post_content">
			   	<?php echo $value['post_content'] ?>"
			   </textarea>
		       <script>CKEDITOR.replace( 'post_content' );</script>
			</td>
		</tr>

		<tr>
			<td>Category: </td>
			
			<td>
			   <select name="category" class="category">
			   	 <option>Select One</option>
			   <?php 
                 foreach ($catlist as $key => $cat) {
			   ?>
			   	 <option 
			   	    <?php
			   	       if($cat['id'] == $value['category']){
			   	       	  echo "selected = 'selected'";
			   	       } 
			   	    ?>
			   	 value="<?php echo $cat['id'] ?>"><?php echo $cat['cat_name'] ?>
			   	 	
			   	 </option>
			   	<?php } ?>
			   </select>
			</td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Update Post"></td>
		</tr>
	</table>
</form>
<?php } ?>