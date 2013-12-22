<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Welcome to E-Shopping | The #1 Online Shopping Website daw</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Twitter Bootstrap External CSS Files -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.min.css" rel="stylesheet">
		<!-- Manual External CSS File -->
		<link rel="stylesheet" href="../css/main.css">
	</head>
	<body>

		<!-- Navigation Starts Here -->
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<a href="index.php" class="navbar-brand">E-Shop</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="#">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Admins</a></li>
								<li><a href="#">Users</a></li>
								<li><a href="#">Products</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">View Products</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">View Admins</a></li>
								<li><a href="#">View Users</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">View Profile</a></li>
								<li><a href="#">Deactivate</a></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation Ends Here -->

		<!-- Footer Starts Here -->
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text pull-left">&copy;Copyright 2013 <br /> Powered by Twitter Bootstrap 3.0 <br /> Site Built by Arvin Kent Lazaga</p>
			</div>
		</div>
		<!-- Footer Ends Here -->

		<!-- Admin Panel List -->
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="page-header">
								<h3>Current Admins</h3>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
		<!-- Admin Panel List End -->	

		<!-- load Javascript External Files here for Fast Load -->
		<script src="../js/lib/jquery-1.8.2.min.js"></script>
		<script src="../js/lib/bootstrap.min.js"></script>

	</body>
</html>