
<h2>Category List</h2>

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
		<th>Serial No</th>
		<th>Cat Name</th>
		<th>Cat Title</th>
		<th>Action</th>
	</tr>
<?php
$i = 0;
 foreach ($cat as $key => $value) {
 	$i++;

?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $value['cat_name']; ?></td>
		<td><?php echo $value['title']; ?></td>
  <?php if(Session::get('level') == 1){ ?>
		<td>
			<a href="<?php echo BASE_URL ?>/Admin/editCat/<?php echo $value['id']; ?>">Edit</a> ||
			<a onclick="return confirm('Are Your Sure to Delete Data!!')" href="<?php echo BASE_URL ?>/Admin/deleteCategoryById/<?php echo $value['id']; ?>">Delete</a>
		</td>
 <?php }else{ ?>
     <td>Not Parmited</td>
  <?php } ?>
	</tr>
<?php } ?>
</table>