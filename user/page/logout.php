<?php

	/**
	 * @global require_once Calls File Directory Controller
	 */
	require_once("../includes/functions/initialize.php");
	
	$user_session->logout();

	redirect_to("login.php?logout=1");

?>

