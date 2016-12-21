
	<h2>Edit Category</h2>
<?php 
  foreach ($editcatById as $key => $value) {
 
?>

	 <form action = "<?php echo BASE_URL ?>/Admin/categoryUpdate" method = "post">
	 <input type = "hidden" name="id" required="1" value="<?php echo $value['id'] ?>" />
	 	<table>
	 		<tr>
	 		  <td>Category Name:</td>
	 		  <td><input type = "text" name="cat_name" required="1" value="<?php echo $value['cat_name'] ?>" /> </td>
	 		</tr>

	 		<tr>
	 		  <td>Category Title:</td>
	 		  <td><input type = "text" name="title" required="1" value="<?php echo $value['title'] ?>"/> </td>
	 		</tr>

	 		<tr>
	 		  <td></td>
	 		  <td><input type = "submit" name="submit" value="Submit" /> </td>
	 		</tr>

	 	</table>
	 </form>
 <?php } ?>
