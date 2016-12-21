<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>

<h2>All Post List</h2>
<?php 
 if(!empty($_GET['msg']))
 {
 	$msg = unserialize(urldecode($_GET['msg']));
 	foreach ($msg as $key => $value) {
 	 echo "<span style='color:green; font-weight: bold;'>".$value."</span>";
 	}
 }
?>

<table id="table_id" class="display" data-page-length = '5'>
   <thead>
	<tr>
		<th width="05%">No</th>
		<th width="25%">Post Title</th>
		<th width="30%">Post Content</th>
		<th width="20%">Category Name</th>
		<th width="20%">Action</th>
	</tr>
  </thead>
  <tbody>
<?php 
   $i = 0;
   foreach ($getPost as $key => $value) {
   $i++;
?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $value['post_title'] ?></td>
		<td>
		  <?php
		      $text = $value['post_content'];
		      if(strlen($text)>40)
		      {
                  $text = substr($text, 0,40);
                  echo $text;
		      }
		   ?>
		  	
		</td>
		<td>
		  <?php
		    foreach ($catlist as $key => $cat) {
		     	if($cat['id'] == $value['category'])
		     		echo $cat['cat_name'];
		     } 
		   ?>
		  	
	    </td>

		<td>
			<a href="">Edit</a> ||
			<a href="">Delete</a>
		</td>
	</tr>
 <?php } ?>
</tbody>
</table>

<script>
	$(document).ready( function () {
	    $('#table_id').DataTable();
	} );
</script>