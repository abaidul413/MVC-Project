
<h2>Background Change</h2>
<?php 
 if(!empty($_GET['msg']))
 {
 	$msg = unserialize(urldecode($_GET['msg']));
 	foreach ($msg as $key => $value) {
 	 echo "<span style='color:green; font-weight: bold;'>".$value."</span>";
 	}
 }
?>

 <form action = "<?php echo BASE_URL ?>/Admin/chahngUiBack" method = "post">
 	<table>
 		<tr>
 		  <td>UI Background Change:</td>
 		  <td><input type = "color" name="color" required="1" /></td>
 		</tr>

 		<tr>
 		  <td></td>
 		  <td><input type = "submit" name="submit" value="ChangeUI" /></td>
 		</tr>

 	</table>
 </form>
