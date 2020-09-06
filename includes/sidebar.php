<div class="col-md-4">

	<!-- Login Well -------------------------------------------------- -->
	<div class="well">
		
				<h4>Login Panel</h4>
		
		<form action="includes/login.php" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="user_uname"
					placeholder="Enter your username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="user_pass"
					placeholder="Enter your password">
			</div>
			<input type="submit" name="loginsubmit" class="btn btn-primary"
				value="Log In">
			<a href="register.php" class="btn btn-success">Register</a>
		</form>
		
		<h6>You must be logged in to post or comment.</h6>
				
	</div>		<!-- /.well -->	




<?php include "search.php" ?>

	<!-- Blog Search Well  -->
	<div class="well">
		<h4>Blog Search</h4>
		<form action="search1.php" method="post">
			<div class="input-group">
				<input name="search" type="text" class="form-control" name="tag">
				<span class="input-group-btn">
					<button name="submit" class="btn btn-default" type="search">
						<span class="glyphicon glyphicon-search"> </span>
					</button>
				</span>
			</div>
		</form>
	</div>	 <!-- /.well -->	
	





	<!-- Blog Categories Well -->

	<?php

		$query = "SELECT * FROM categories";
		$select_categories_sidebar = mysqli_query ($connection,$query);
				
	?>


	<div class="well">
		<div class="row">
			<div class="col-md-6">
				<ul class="list-unstyled">
				<br />
					<?php
						while ($row = mysqli_fetch_assoc ($select_categories_sidebar)){
							$cat_title = $row['cat_title'];
							echo "<li> <a href='#'>{$cat_title} </a> </li>";
						}
					?>
				</ul>
			</div>			
		</div>		
	</div>		
	
<?php include"widget.php"?>