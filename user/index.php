<?php
	
	/**
	 * @global require_once Calls File Directory Controller
	 */
	require_once('includes/functions/initialize.php');

	if( !$user_session->is_logged_in() ) { redirect_to("../index.php"); } 

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Welcome to E-Shopping | The #1 Online Shopping Website daw</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Arvin Kent Lazaga">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="...css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/main.css">
	</head>
	<body>
		<!-- Navigation Starts Here -->
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<a href="index.php" id="sitename" class="navbar-brand">E-Shop</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart fa-fw"></i> Products<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a>Categories</a>
									<ul id="submenu" class="dropdown">
										<li><b>&rsaquo;</b> <a href="#">Category 1</a></li>
										<li><b>&rsaquo;</b> <a href="#">Category 2</a></li>
										<li><b>&rsaquo;</b> <a href="#">Category 3</a></li>
										<li><b>&rsaquo;</b> <a href="#">Category 4</a></li>
										<li><b>&rsaquo;</b> <a href="#">Category 5</a></li>
									</ul>
								</li>
								<li>
									<a href="#searchmodal" data-toggle="modal" class="dropdown-toggle"><i class="fa fa-search fa-fw"></i> Search Product</a>
								</li>
							</ul>
						</li>
						<li><a href="../page/about-us.php"><i class="fa fa-group fa-fw"></i> About Us</a></li>
					 	<li><a href="../page/contact-us.php"><i class="fa fa-phone fa-fw"></i> Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">	
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <?php echo ucfirst($_SESSION['username']); ?> <i class="fa fa-user fa-fw"></i></a>
							<ul class="dropdown-menu">
								<li><a href="">View Profile <i class="fa fa-user fa-fw"></i></a></li>
								<li><a href="">Purchased Items<i class="fa fa-shopping-cart fa-fw"></i></a></li>
								<li><a href="page/logout.php">Logout <i class="fa fa-sign-out fa-fw"></i></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation Ends Here -->

		<!-- Carousel Image Slider Starts Here -->
		<div class="container2">
			<div class="row">
				<div id="myCarousel" class="carousel slide">
		 			<ul class="carousel-indicators">
		 			 	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		 			 	<li data-target="#myCarousel" data-slide-to="1"></li>
		 			 	<li data-target="#myCarousel" data-slide-to="2"></li>
		 			</ul>	
		 			<div class="carousel-inner">
		 				<div class="item active">
		 			 		<img src="../img/motivational-pic1.jpg" class="img-responsive">
		 			 		<div class="carousel-caption">
		 			 			 
		 			 		</div>
		 			 	</div>
		 			 	<div class="item">
		 			 		<img src="../img/motivational-pic2.jpg" class="img-responsive">
		 			 		<div class="carousel-caption">
		 			 			 
		 			 		</div>
		 			 	</div>
		 			 	<div class="item">
		 			 		<img src="../img/motivational-pic3.jpg" class="img-responsive">
		 			 		<div class="carousel-caption">
		 			 			 
		 			 		</div>
		 			 	</div>
		 			 </div>	
		 			<a class="carousel-control left" href="#myCarousel" data-slide="prev">
		 				<span class="icon-prev"></span>
		 			</a>
		 			<a class="carousel-control right" href="#myCarousel" data-slide="next">
		 			 	<span class="icon-next"></span>
		 			</a>	
	 			</div>		
	 		</div>	
		</div>
		<!-- Carousel Image Slider Ends Here -->
	
		<!-- Welcome Panel Starts Here -->
		<center>
			<div class="jumbotron">
				<h1>Welcome to E-Shopping Website</h1> 
				<p>Lots of Awsome Stuff Here</p>
				<a class="btn btn-info" href="#registrationmodal" data-toggle="modal">Sign Up</a>
				<a class="btn btn-primary" href="#loginmodal" data-toggle="modal">Login</a>
			</div>
		</center>	
		
		<!-- Welcome Panel Ends Here -->
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<h4><i class="fa fa-shopping-cart fa-fw"></i> Products</h4>
					<a href="#">Product1</a>
					<br />
					<a href="#">Product2</a>
					<br />
					<a href="#">Product3</a>
					<br />
					<a href="#">Product4</a>
				</div>
				<div class="col-md-2">
					<h4><i class="fa fa-group fa-fw"></i> About</h4>
					<a href="#">Mission</a>
					<br />
					<a href="#">Vision</a>
					<br />
					<a href="#">Developers</a>					
				</div>
				<div class="col-md-2">
					<h4><i class="fa fa-cogs fa-fw"></i> Support</h4>
					<a href="#">Contact Us</a>
					<br/>
					<a href="#contact" data-toggle="modal">Send Us Feedback</a>		
				</div>
				<div class="col-md-2">
					<h4><i class="fa fa-legal fa-fw"></i> Legal</h4>
					<a href="#">Terms of Use</a>
					<br />				
					<a href="#">Privacy Policy</a>
				</div>
			</div>
		</div>
		<!-- Footer Starts Here -->

		<div class="navbar navbar-default navbar-fixed-bottom foot-bg">
			<div class="container">
				<div class="row">
					<p id="text-white" class="navbar-text pull-left">&copy;Copyright 2013 <br /> Powered by Twitter Bootstrap 3.0 <br />Design and Built by Arvin Kent Lazaga</p>
					<a id="feedbackbutt" href="#contact" data-toggle="modal" class="navbar-btn btn-danger btn btn pull-right">Send Us Feedback</a>
				</div>
			</div>
		</div>
		<!-- Footer Ends Here -->

		<!-- Feedback Modal Form Starts Here -->
		<div class="modal fade" id="contact" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						<div class="modal-header">
							<h4>Send Us Feedback<a class="nav-text pull-right close-mark" data-dismiss="modal"><button type="button" class="close" aria-hidden="true">&times;</button></a></h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="contact-name" class="col-lg-2 control-label">Name:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="contact-name" placeholder="Full Name">
								</div>
							</div>	
							<div class="form-group">
								<label for="contact-email" class="col-lg-2 control-label">Email:</label>
								<div class="col-lg-10">
									<input type="email" class="form-control" id="contact-email" placeholder="Email">
								</div>
							</div>	
							<div class="form-group">
								<label for="contact-msg" class="col-lg-2 control-label">Message:</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="8">
										
									</textarea>
								</div>
							</div>	
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" type="submit">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Feedback Modal Form Ends Here -->

		<!-- Search Modal Form Starts Here -->
		<div class="modal fade" id="searchmodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="page/search-product.php" class="form-horizontal">
						<div class="modal-header">
							<h4 id="search-title">Search Product<a class="nav-text pull-right close-mark" data-dismiss="modal"><button type="button" class="close" aria-hidden="true">&times;</button></a></h4>
						</div>
						<div class="modal-body">
							<div class="form-group pad-group">
								<div class="input-group"> 
									<span class="input-group-addon">
										<img src="img/search-icon.png" height="20" class="responsive">
									</span>
									<input type="text" id="search-text" class="form-control" placeholder="Search Product">
									<span class="input-group-btn">
										<button class="btn btn-primary">Search</button>
									</span>
								</div>
							</div>	
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Search Modal Form End Here -->

		<!-- load Javascript External Files here for Fast Load -->
		<script src="../js/lib/jquery-1.8.2.min.js"></script>
		<script src="../js/lib/bootstrap.min.js"></script>
		<script src="../js/ajax-scripts.js"></script>

	</body>
</html>
<?php 

	/**
	 * Closes Connection if Connection was been Established.
	 *
	 * Calls Database Object Class Method close_connection 
	 */
    if( isset( $db ) ) { 
    	$db->close_connection(); 
    } 

?>