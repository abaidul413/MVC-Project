
<h2>User List</h2>

<?php 
 if(!empty($_GET['msg']))
 {
 	$msg = unserialize(urldecode($_GET['msg']));
 	foreach ($msg as $key => $value) {
 	 echo "<span style='color:green; font-weight: bold;'>".$value."</span>";
 	}
 }
?>

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
		<td>
		  <?php
		    if ($value['level'] == 1) {
		    	echo "Admin";
		    } elseif ($value['level'] == 2){
		    	echo "Author"; 
		    }elseif($value['level'] == 3){
                echo "Contributor"; 
		    }
		    
		  ?>
			
		</td>
		<td>
			<a onclick="return confirm('Are Your Sure to Delete Data!!')" href="<?php echo BASE_URL ?>/UserController/deleteUserById/<?php echo $value['id']; ?>">Delete</a>
		</td>
	</tr>
<?php } ?>
</table>