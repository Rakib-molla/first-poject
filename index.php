<?php include"includes/db.php" ?>
<?php include"includes/header.php" ?>
<?php include"includes/Navigation.php"?>


<body>   
<!-- Navigation  -->

<!-- Page Content -->
<!-- Blog Post Begins Here -->
<div id="main-container" class="container">
	<div class="row">

	<!-- Blog Entries Column -->
		<div class="col-md-8">
			 <?php
				$query = "SELECT * FROM posts";
				$select_all_posts_query = mysqli_query ($connection,$query);
				
				while ($row = mysqli_fetch_assoc ($select_all_posts_query)){
					 $post_id  = $row['post_id'];
					 $post_category_id = $row['post_category_id'];
					 $post_title = $row['post_title'];
					 $post_author = $row['post_author'];
					 $post_date = $row['post_date'];
					 $post_image = $row['post_image'];
					 $post_content = $row['post_content'];
					 $post_tags = $row['post_tags'];
					 $post_comment_count = $row['post_comment_count'];
					 $post_status = $row['post_status'];
					
				}
			?> 

			<h1 class="page-header">Hi-Lo-Yo 
				<small>&nbsp;&nbsp;&nbsp;Secoundary text</small>
			</h1>
			<!-- first blog post -->
			<h2>
				<a href="#"> <?php echo $post_title ;?> </a>
			</h2>
			<p class="lead">
				Post By <a href="#"> <?php echo $post_author ;?> </a>
			</p>
			<p>
				 <span class="glyphicon glyphicon-time"> </span> <?php echo $post_date ;?> 
				 
			 </p>	

			 <img class="img-responsive" src="images/<?php echo $post_image ;?>" alt="image">
			
			<hr>
			<p> <?php echo $post_content ;?> </p>
			<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span> </a>
			<hr>
		
		<!-- Secound blog post -->

			<!-- <h2>
				<a href="index.php">Are You Looking For Web-Developer ?</a>
			</h2>
			<p class="lead">
				Post By <a href="index.php">Author</a>
			</p>
			<p> <span class="glyphicon glyphicon-time"></span> Post On august at 10.00 AM </p>
			<img class="img-responsive" src="images/rakib.jpg" alt="">
			<hr>
			<p> Fashion show mall the pairs the palms payoff double down margaritaville? Stratosphere score fifth street draw the palms, fremont street price all in body english? Zappos flush dealer the district the palms top of the world breaking even; caesar's palace shops at crystals capriotti's vegas givecamp mandalay bay lock! lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
			<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span> </a>
			<hr>

		<!-- Third blog post -->
			
			<!-- <h2>
				<a href="index.php">Are You Looking For Web-Developer ?</a>
			</h2>
			<p class="lead">
				Post By <a href="index.php">Author</a>
			</p>
			<p> <span class="glyphicon glyphicon-time"></span> Post On august at 10.00 AM </p>
			<img class="img-responsive" src="images/rakib.jpg" alt="">
			<hr>
			<p> Fashion show mall the pairs the palms payoff double down margaritaville? Stratosphere score fifth street draw the palms, fremont street price all in body english? Zappos flush dealer the district the palms top of the world breaking even; caesar's palace shops at crystals capriotti's vegas givecamp mandalay bay lock! lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
			<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span> </a>
			<hr> --> 
<br />

<!-- special alert div -->
<div class="alert alert-danger">
	Database error: No database selected</div>
			
<br />

<!-- pagination links  -->
<div class="pagination-div">
	<ul class="pagination pagination-sm"  >
		<li>
			<a href="index.php?p=1" aria-label="Previous">
  				<span aria-hidden="true">&laquo;</span>
			</a>
			</li>
	  	  	<li class="active">
		  		<a href="index.php?p=1">1</a>
	  		</li>
	  		<li>
				<a href="index.php?p=1" aria-label="Next">
  					<span aria-hidden="true">&raquo;</span>
				</a>
			</li>
		</ul>
	</div>
</div>		

<!-- Blog Sidebar Widgets Column -->
<?php include"includes/sidebar.php"?>

		
<!-- footer -->
<?php include"includes/footer.php"?>		

</body>
</html>