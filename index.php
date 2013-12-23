<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Welcome to E-Shopping | The #1 Online Shopping Website daw</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<!-- Navigation Starts Here -->
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<a href="#" id="sitename" class="navbar-brand">E-Shop</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="#">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
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
									<a href="#searchmodal" data-toggle="modal" class="dropdown-toggle">Search Product</a>
								</li>
							</ul>
						</li>
						<li><a href="#">About Us</a></li>
					 	<li><a href="#">Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">	
						<li><a href="#registrationmodal" data-toggle="modal">Sign Up</a></li>
						<li><a href="#loginmodal" data-toggle="modal" >Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation Ends Here -->

		<!-- Carousel Image Slider Starts Here -->
		<div class="container">
			<div class="row">
				<div id="myCarousel" class="carousel slide">
		 			<ul class="carousel-indicators">
		 			 	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		 			 	<li data-target="#myCarousel" data-slide-to="1"></li>
		 			 	<li data-target="#myCarousel" data-slide-to="2"></li>
		 			</ul>	
		 			<div class="carousel-inner">
		 				<div class="item active">
		 			 		<img src="http://placehold.it/1250x330" class="img-responsive">
		 			 		<div class="carousel-caption">
		 			 			 
		 			 		</div>
		 			 	</div>
		 			 	<div class="item">
		 			 		<img src="http://placehold.it/1250x330" class="img-responsive">
		 			 		<div class="carousel-caption">
		 			 			 
		 			 		</div>
		 			 	</div>
		 			 	<div class="item">
		 			 		<img src="http://placehold.it/1250x330" class="img-responsive">
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
		<div class="container"> 
			<div class="row">
				<center>
				<div class="jumbotron">
					<h1>Welcome to E-Shopping Website</h1> 
					<p>Lots of Awsome Stuff Here</p>
					<a class="btn btn-info" href="#registrationmodal" data-toggle="modal">Sign Up</a>
					<a class="btn btn-primary" href="#loginmodal" data-toggle="modal">Login</a>
				</div>
				</center>	
			</div>
		</div>
		<!-- Welcome Panel Ends Here -->

		<!-- Footer Starts Here -->
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<div class="row">
					<p class="navbar-text pull-left">&copy;Copyright 2013 <br /> Powered by Twitter Bootstrap 3.0 <br /> Site Built by Arvin Kent Lazaga</p>
					<a href="#contact" data-toggle="modal" class="navbar-btn btn-danger btn btn pull-right">Send Us Feedback</a>
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
							<h4>Send Us Feedback</h4>
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
							<a class="btn btn-default" data-dismiss="modal">Close</a>
							<button class="btn btn-primary" type="submit">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Feedback Modal Form Ends Here -->

		<!-- Login Modal Form Starts Here -->
		<div class="modal fade" id="loginmodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						<div class="modal-header">
							<h4>Login Authentication</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="username" class="col-lg-2 control-label">Username</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="username" placeholder="Email Address or Username">
								</div>
							</div>	
							<div class="form-group">
								<label for="password" class="col-lg-2 control-label">Password</label>
								<div class="col-lg-10">
									<input type="password" class="form-control" id="password" placeholder="Password">
								</div>
							</div>		
						</div>
						<div class="modal-footer">
							<div class="pull-left">
								<a href="#registrationmodal" data-toggle="modal" data-dismiss="modal" class="btn btn-info">Not a User Yet?</a>
							</div>
							<button class="btn btn-primary" type="submit">Login</button>
							<a class="btn btn-default" data-dismiss="modal">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Login Modal Form End Here -->

		<!-- Search Modal Form Starts Here -->
		<div class="modal fade" id="searchmodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="page/search_product.php" class="form-horizontal">
						<div class="modal-header">
							<h4>Search Product</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<div class="col-lg-12">
									<input type="text" class="form-control" placeholder="Search Product">
								</div>
								<br />
								<center>
									<button class="btn btn-primary" type="submit">Search</button>
									<a class="btn btn-default" data-dismiss="modal">Cancel</a>
								</center>
							</div>	
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Search Modal Form End Here -->

		<!-- Registration Modal Form Starts Here -->
		<div class="modal fade" id="registrationmodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						<div class="modal-header">
							<h4>Registration Form</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="firstname" class="col-lg-2 control-label">Firstname:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="firstname" placeholder="Your Firstname">
								</div>
							</div>	
							<div class="form-group">
								<label for="middlename" class="col-lg-2 control-label">Middlename:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="middlename" placeholder="Your Middlename">
								</div>
							</div>	
							<div class="form-group">
								<label for="lastname" class="col-lg-2 control-label">Lastname:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="lastname" placeholder="Your Lastname">
								</div>
							</div>
							<div class="form-group">
								<label for="email2" class="col-lg-2 control-label">Email:</label>
								<div class="col-lg-10">
									<input type="email" class="form-control" id="email2" placeholder="Your Email Address">
								</div>
							</div>
							<div class="form-group">
								<label for="addr" class="col-lg-2 control-label">Address:</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="6">
										
									</textarea>
								</div>
							</div>	
							<div class="form-group">
								<label for="cont" class="col-lg-2 control-label">Phone #:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="cont" placeholder="Your Cellphone Number">
								</div>
							</div>			
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" type="submit">Submit</button>
							<a class="btn btn-default" data-dismiss="modal">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Registration Modal Form Ends Here -->

		<!-- load Javascript External Files here for Fast Load -->
		<script src="js/lib/jquery-1.8.2.min.js"></script>
		<script src="js/lib/bootstrap.min.js"></script>
		<script src="js/ajax-scripts.js"></script>
		<script>

			$(document).ready(function(){
				$('#myCarousel').carousel({
					interval: 3000,
					pause: 'hover'
				});
			});

		</script>

	</body>
</html>