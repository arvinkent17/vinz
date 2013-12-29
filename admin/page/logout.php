<?php

	/**
	 * @global require_once Calls File Directory Controller
	 */
	require_once("../includes/functions/initialize.php");
	
	if( !$admin_session->is_logged_in() ) { redirect_to("login.php"); }

	$admin_session->logout();

	redirect_to("login.php?logout=1");

?>

