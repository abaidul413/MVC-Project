
	<h2>Add Category</h2>

	 <form action = "<?php echo BASE_URL ?>/Admin/insertCategory" method = "post">
	 	<table>
	 		<tr>
	 		  <td>Category Name:</td>
	 		  <td><input type = "text" name="cat_name" required="1" /> </td>
	 		</tr>

	 		<tr>
	 		  <td>Category Title:</td>
	 		  <td><input type = "text" name="title" required="1" /> </td>
	 		</tr>

	 		<tr>
	 		  <td></td>
	 		  <td><input type = "submit" name="submit" value="Submit" /> </td>
	 		</tr>

	 	</table>
	 </form>
