<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
<h2>Add Post</h2>

<?php 

  if(isset($errorsPost)){
  	echo '<div style = "color:red; border:1px solid gray; padding: 5px 10px; margin:5px;">';
  	foreach ($errorsPost as $key => $value) {
  		switch ($key) {
  			case 'post_title':
  				foreach($value as $val) {
  					echo "Title:".$val."<br>";
  				}
  				break;

			case 'post_content':
  				foreach($value as $val) {
  					echo "Content:".$val."<br>";
  				}
  				break;
  			
  			case 'category':
  				foreach($value as $val) {
  					echo "Category:".$val."<br>";
  				}
  				break;

  			default:
  				break;
  		}
  	}
  echo '</div>';
  }
?>

<form action="<?php echo BASE_URL ?>/Admin/insertPost" method="post">
	<table>
		<tr>
			<td>Post Name: </td>
			<td><input type="text" name="post_title" placeholder="Post Name..." /></td>
		</tr>

		<tr>
			<td>Post Content: </td>
			<td>
			   <textarea name="post_content"></textarea>
		       <script>CKEDITOR.replace( 'post_content' );</script>
			</td>
		</tr>

		<tr>
			<td>Category: </td>
			
			<td>
			   <select name="category" class="category">
			   	 <option>Select One</option>
			   <?php 
                 foreach ($catList as $key => $value) {
			   ?>
			   	 <option value="<?php echo $value['id'] ?>"><?php echo $value['cat_name'] ?></option>
			   	<?php } ?>
			   </select>
			</td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>