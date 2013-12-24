<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Welcome to E-Shopping | The #1 Online Shopping Website daw</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Twitter Bootstrap External CSS Files -->
		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		<link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
		<!-- Manual External CSS File -->
		<link rel="stylesheet" href="../../css/main.css">
	</head>
	<body>

		<!-- Navigation Starts Here -->
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<a href="index.php" class="navbar-brand">E-Shopping</a>
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
				<!-- Login Form Starts Here -->
				<div class="col-lg-3">
					<div class="list-group">
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Administrator Login</h4>
							<div id="groupitem" class="list-group-item-text">
								<form class="form-horizontal" method="post">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Username">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" id="pword" placeholder="Password">
										<div class="nav pull-right">
											<button class="btn btn-primary" type="submit">Login</button>
										</div>
									</div>
								</form> 
							</div>
						</div>
					</div>	
				</div>
				<!-- Login Form Ends Here -->
			</div>	
		</div>
		<!-- Admin Panel List End -->		

		<!-- load Javascript External Files here for Fast Load -->
		<script src="../../js/lib/jquery-1.8.2.min.js"></script>
		<script src="../../js/lib/bootstrap.min.js"></script>
		<script src="../../js/ajax-scripts.js"></script>
	</body>
</html>