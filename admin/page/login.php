<?php 
	
	/**
	 * @global require_once Calls File Directory Controller
	 */
	require_once("../../includes/functions/initialize.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Welcome to E-Shopping | The #1 Online Shopping Website daw</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Arvin Kent Lazaga">
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
				<a href="../index.php" class="navbar-brand">E-Shop</a>
			</div>
		</div>
		<!-- Navigation Ends Here -->


		<!-- Footer Starts Here -->
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<div class="row">
					<p class="navbar-text pull-left">&copy;Copyright 2013 <br /> Powered by Twitter Bootstrap 3.0 <br />Design and Built by Arvin Kent Lazaga</p>
				</div>
			</div>
		</div>
		<!-- Footer Ends Here -->
		
		<!-- Admin Panel List -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="page-header">
								<h3>Administrator List</h3>
							</div>	
							<div id="fix-bottom" class="jumbotron">
								<h3>Welcome to Administrator Login Page</h3> 
								<p>Note: Before Logging in to the System make sure that you are now in a private place</p>
								<a class="btn btn-info" href="../../index.php">Back to Main Site</a>	
								<div class="pull-right">
									<h4>By Administrator Arvin Kent</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Login Form Starts Here -->
				<div class="col-lg-4">
					<div class="list-group">
						<div class="list-group-item">
							<h3 class="list-group-item-heading">Administrator Login</h3>
							<div id="groupitem" class="list-group-item-text">
								<form class="form-horizontal" action="authenticate-login.php" method="post">
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
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Total Registered User on Our Site </h4>
							<br />
							<p>Currently there is no Registered User Yet</p>
						</div>
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Social Media </h4>
							<br />
							<table class="table-condensed" align="center">
								<tbody>
									<tr>
										<td>
											<a href="#" title="Go to your Facebook Page"><img src="../../img/facebook.png" class="img-responsive"></a>
										</td>
										<td>&nbsp;</td>
										<td>
											<a href="#" title="Go to your Google+ Page"><img src="../../img/googleplus.png" class="img-responsive"></a>
										</td>
										<td>&nbsp;</td>
										<td>
											<a href="#" title="Go to your Twitter Page"><img src="../../img/twitter.png" class="img-responsive"></a>
										</td>
									</tr>
								</tbody>
							</table>						
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