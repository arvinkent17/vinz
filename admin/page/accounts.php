<?php 
	
	/**
	 * @global require_once Calls File Directory Controller
	 */
	require_once("../includes/functions/initialize.php");

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
		<link href="../../css/bootstrap.min.css" rel="stylesheet">
		<link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="../../css/font-awesome.min.css" rel="stylesheet">
		<!-- Manual External CSS File -->
		<link rel="stylesheet" href="../../css/main.css">
	</head>
	<body>

		<!-- Navigation Starts Here -->
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<a href="../index.php" id="sitename" class="navbar-brand">E-Shop</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="../index.php"><i class="fa fa-home fa-fw"></i> Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search fa-fw"></i> Search<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#searchproductmodal" data-toggle="modal"><i class="fa fa-shopping-cart fa-fw"></i> Product</a></li>
								<li><a href="#searchcustommodal" data-toggle="modal"><i class="fa fa-users fa-fw"></i> Customers</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="products.php"><i class="fa fa-shopping-cart fa-fw"></i> Products</b></a>
						</li>
						<li class="active">
							<a href="accounts.php"><l class="fa fa-users fa-fw"></i> Accounts</b></a>
							
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Admin <?php echo ucfirst($_SESSION['username']); ?> <i class="fa fa-cogs fa-fw"></i></a>
							<ul class="dropdown-menu">
								<li><a href=>View Profile <i class="fa fa-user fa-fw"></i></a></li>
								<li><a href="logout.php">Logout <i class="fa fa-sign-out fa-fw"></i></a></li>
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
								<h3>Administrator List
								</h3>
							</div>
							<div class="col-lg-12">
							<h4>Administrators</h4>
								<div class="well">
									<div class="table-responsive" >
									<table id="tablewell" class="table table-striped table-condensed table-bordered table-hover">
										<thead>
											<th>#</th>
											<th>Name</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Contact No</th>
											<th>Action</th>
										</thead>
										<tbody>
										<?php

											$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

							          		$per_page = 5;

          									$total_count = $paginate->count_all( "tbl_admininfo" );
          									
          									$class = $admin;

          									$message1 = "Sorry. There is currently no records yet in your Admin Lists.";

          									$rows = 7;

          									$paginate->pagination_read( $class, $rows, "tbl_admininfo", $page, $per_page, $total_count, $message1 );
          								
          								?>
										</tbody>
									</table>
									</div>
									<div class="pull-left">
									<?php

										$pagelinks = $paginate->pagination_links();

										echo $pagelinks;
										
									?>
									</div>
									<div class="pull-right">
									<?php 

										if( $paginate->total_pages() != 0 && $paginate->has_next_page() == TRUE ) {

											$pagelist = $paginate->page_list();

											echo $pagelist;

										}
							
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="list-group">
						<div class="list-group-item">
							<h4  id="statishead" class="list-group-item-heading"><i class="fa fa-users fa-fw"></i> Account Statistics</h4>
							<div id="statis" class="well">
								<div class="pull-left">
									<h5><i class="fa fa-group fa-fw"></i> <strong>Users : <?php echo $user->count(); ?></strong></h5>	
								</div>
								<div class="pull-right">
									<h5><i class="fa fa-user fa-fw"></i> <strong>Admins : <?php echo $admin->count(); ?></strong></h5>	
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<h4  id="statishead" class="list-group-item-heading"><i class="fa fa-money fa-fw"></i> Sales Statistics</h4>
							<div id="statis" class="well">
								<div class="pull-left">
									<h5><i class="fa fa-shopping-cart fa-fw"></i> <strong>Products Sold : <?php echo $products->sold_products(); ?></strong></h5>	
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<h4  id="statishead" class="list-group-item-heading"><i class="fa fa-truck fa-fw"></i> Stocks</h4>
							<div id="statis2" class="well">
								<div class="pull-left">
									<h5><i class="fa fa-star fa-fw"></i> <strong>Total Stocks : <?php echo $products->count_stocks(); ?></strong> <br /><br /> <strong><i class="fa fa-minus-square  fa-fw"></i> Remaining Stocks : <?php echo $products->remaining_stocks(); ?></strong></h5>										
								</div>
							</div>
						</div>
						<div class="list-group-item">
							<h4  id="statishead" class="list-group-item-heading"><i class="fa fa-mail-forward fa-fw"></i> Feedbacks</h4>
							<div id="statis" class="well">
								<div class="input-group"> 
									<span class="input-group-btn">
										<center><button class="btn btn-info">Read Mails</button></center>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
		</div>
		<!-- Admin Panel List End -->	

		<!-- Search Customer Modal Form Starts Here -->
		<div class="modal fade" id="searchcustommodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="search-customer.php" class="form-horizontal">
						<div class="modal-header">
							<h4 id="search-title">Search Customer<a class="nav-text pull-right close-mark" data-dismiss="modal"><button type="button" class="close" aria-hidden="true">&times;</button></a></h4>
						</div>
						<div class="modal-body">
							<div class="form-group pad-group">
								<div class="input-group"> 
									<span class="input-group-addon">
										<img src="../../img/search-icon.png" height="20" class="responsive">
									</span>
									<input type="text" id="search-text" class="form-control" placeholder="Search Customer" required>
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
		<!-- Search Customer Modal Form End Here -->

		<!-- Search Product Modal Form Starts Here -->
		<div class="modal fade" id="searchproductmodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="search-product.php" class="form-horizontal">
						<div class="modal-header">
							<h4 id="search-title">Search Product<a class="nav-text pull-right close-mark" data-dismiss="modal"><button type="button" class="close" aria-hidden="true">&times;</button></a></h4>
						</div>
						<div class="modal-body">
							<div class="form-group pad-group">
								<div class="input-group"> 
									<span class="input-group-addon">
										<img src="../../img/search-icon.png" height="20" class="responsive">
									</span>
									<input type="text" id="search-text" class="form-control" placeholder="Search Product" required>
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
		<!-- Search Product Modal Form End Here -->

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
