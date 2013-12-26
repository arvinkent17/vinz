<?php 
	
	/**
	 * @global require_once Calls File Directory Controller
	 */
	require_once("includes/functions/initialize.php");

	if( !$admin_session->is_logged_in() ) { redirect_to("page/login.php"); }

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Welcome to E-Shopping | Administartor Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Arvin Kent Lazaga">
		<!-- Twitter Bootstrap External CSS Files -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">
		<!-- Manual External CSS File -->
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
						<li class="active"><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search fa-fw"></i> Search<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Product</a></li>
								<li><a href="#"><i class="fa fa-users fa-fw"></i> Customers</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Products</b></a>
						</li>
						<li class="dropdown">
							<a href="#"><l class="fa fa-users fa-fw"></i> Accounts</b></a>
							
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <?php echo ucfirst($_SESSION['username']); ?> <i class="fa fa-cogs fa-fw"></i></a>
							<ul class="dropdown-menu">
								<li><a href=>View Profile <i class="fa fa-user fa-fw"></i></a></li>
								<li><a href="page/logout.php">Logout <i class="fa fa-sign-out fa-fw"></i></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation Ends Here -->

		<!-- Footer Starts Here -->
		<div class="navbar navbar-default navbar-fixed-bottom foot-bg">
			<div class="container">
				<div class="row">
					<p id="text-white" class="navbar-text pull-left">&copy;Copyright 2013 <br /> Powered by Twitter Bootstrap 3.0 <br />Design and Built by Arvin Kent Lazaga</p>
				</div>
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
