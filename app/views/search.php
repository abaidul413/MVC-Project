<div class="serachoption">
	<div class="menu">
		<a href="<?php echo BASE_URL ?>">Home</a>
	</div>
	<div class="search">
		<form action="" method="post">
			<input type="text" name="search" placeholder="Search here...">
			<select class="catsearch">
			  <option>Select One</option>
			<?php foreach ($catlistforsearch as $key => $value) {

             ?>
			  <option value=""><?php echo $value['cat_name']; ?></option>
		  <?php } ?>
			</select>
			<button type="submit" class="submitbtn">Search</button>
		</form>
	</div>
</div>