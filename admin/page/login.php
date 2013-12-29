<?php 
	
	/**
	 * @global require_once Calls File Directory Controller
	 */
	require_once("../includes/functions/initialize.php");

	if( $admin_session->is_logged_in() ) { redirect_to("../index.php"); }

	if( isset( $_POST['login'] ) ) {

		$username = trim( $_POST['uname'] );
		$password = trim( $_POST['pword'] );

		$found_admin = $admin->authenticate( $username, $password );

		if( $found_admin ) {
			$admin_session->login( $found_admin );
			redirect_to( "../index.php" );
		} else {
			$err_message = "incorrect username or password.";
		}

	} else {	

		if( isset( $_GET['logout'] ) && $_GET['logout'] == 1) {
			$message ="You are now Logged Out.";
		}
		
		$username = "";
		$password = "";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Administrator Login Page</title>
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
		<div class="navbar navbar-default navbar-fixed-bottom foot-bg">
			<div class="container">
				<div class="row">
					<p id="text-white" class="navbar-text pull-left">&copy;Copyright 2013 <br /> Powered by Twitter Bootstrap 3.0 <br />Design and Built by Arvin Kent Lazaga</p>
				</div>
			</div>
		</div>
		<!-- Footer Ends Here -->
		
		<div class="container">
			<?php if(!empty( $message ) ) { echo output_messagev1( $message ); }?>
		</div>

		<!-- Admin Panel List -->
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="page-header">
								<div id="fix-top" class="jumbotron">
								<h3>Welcome to Administrator Login Page</h3> 
								<p>Note: Before Logging in to the System make sure that you are now in a private place</p>
								<a class="btn btn-info" href="#confirm" data-toggle="modal">Back to Main Site</a>	
								</div>
							</div>	
							<div class="pull-right">
									<h4>By Administrator Arvin Kent</h4>
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
								<form class="form-horizontal" method="post">
									<div class="form-group">
										<input type="text" class="form-control" name="uname" value="<?php echo htmlentities($username); ?>" placeholder="Username" required>
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="pword" id="pword" value="<?php echo htmlentities($password); ?>" placeholder="Password" required>
										<div class="nav pull-right">
											<button class="btn btn-primary" name="login" type="submit">Login</button>
										</div>
									<div class="pull-left">
									<?php if(!empty( $err_message ) ) { echo output_messagev2( $err_message ); } ?>
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

		<div class="modal fade" id="confirm" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						<div class="modal-body">
							<div class="modal-header">
								<h3>Oops!</h3>
							</div>
							<center><h4>Are you sure you want to go back to Public Main Site?</h4>
								<button class="btn btn-default" id="mainsite" type="button">Yes</button>
								<a class="btn btn-default" data-dismiss="modal">No</a>
							</center>					
						</div>
					</form>
				</div>
			</div>
		</div>		

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