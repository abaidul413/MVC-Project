
	<h2>Add Category</h2>

	 <form action = "<?php echo BASE_URL ?>/UserController/makeNewUser" method = "post">
	 	<table>
	 		<tr>
	 		  <td>User Name:</td>
	 		  <td><input type = "text" name="username" required="1" /> </td>
	 		</tr>

	 		<tr>
	 		  <td>Password:</td>
	 		  <td><input type = "text" name="password" required="1" /> </td>
	 		</tr>

	 		<tr>
	 		  <td>User Roles:</td>
	 		  <td>
	 		  	 <select name = "level" class="category">
	 		  	 	<option>Select User Role</option>
	 		  	 	<option value="2">Author</option>
	 		  	 	<option value="3">Contributor</option>
	 		  	 </select>
	 		  </td>
	 		</tr>

	 		<tr>
	 		  <td></td>
	 		  <td><input type = "submit" name="submit" value="Make User" /> </td>
	 		</tr>

	 	</table>
	 </form>
