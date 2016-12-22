
<h2>User List</h2>
<table class="tblone">
	<tr>
		<th width="15%">Serial No</th>
		<th width="30%">User Name</th>
		<th width="30%">Lavel</th>
		<th width="25%">Action</th>
	</tr>
<?php
$i = 0;
 foreach ($user as $key => $value) {
 	$i++;

?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $value['username']; ?></td>
		<td><?php echo $value['level']; ?></td>
		<td>
			<a onclick="return confirm('Are Your Sure to Delete Data!!')" href="<?php echo BASE_URL ?>/User/deleteUserById/<?php echo $value['id']; ?>">Delete</a>
		</td>
	</tr>
<?php } ?>
</table>