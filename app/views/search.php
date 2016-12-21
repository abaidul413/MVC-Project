<div class="serachoption">
	<div class="menu">
		<a href="<?php echo BASE_URL ?>">Home</a>
	</div>
	<div class="search">
		<form action="<?php echo BASE_URL; ?>/Index/search" method="post">
			<input type="text" name="keyword" placeholder="Search here...">
			<select class="catsearch" name="category">
			  <option>Select One</option>
			<?php 
			 foreach ($catlistforsearch as $key => $value) {

             ?>
			  <option value="<?php echo $value['id'] ?>"><?php echo $value['cat_name']; ?></option>
		  <?php } ?>
			</select>
			<button type="submit" class="submitbtn">Search</button>
		</form>
	</div>
</div>