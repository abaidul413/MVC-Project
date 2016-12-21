<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
<h2>Add Post</h2>
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
			   	 <option value="1">Select One</option>
			   	 <option value="2">Select Two</option>
			   	 <option value="3">Select Three</option>
			   </select>
			</td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>