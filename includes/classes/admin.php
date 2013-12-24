<?php

	/**
     * This File Contains Admin Class.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 24, 2013
     * @since December 24, 2013
	 */

	/**
	 * Admin Object Class
	 * 
	 */
	class Admin {

		/**
		 * Admin Table Name
		 *  
		 * @access protected
		 */
		protected $admin = "tbl_admin";

		/**
		 * Authenticate Admin Username and Password when Logging in
		 *
		 * @access protected
		 * @return boolean TRUE or False
		 */
		public function authenticate( $username = "", $password = "" ) {
			global $db;
			$username = $db->escape_value( $username );
			$password = $db->escape_value( $password );
			$query = "SELECT * FROM " . $this->admin;
			$query .= "WHERE username = '{$username}' ";
			$query .= "AND password = '{$password}' ";
			$query .= "LIMIT 1";
			$result = $db->exe_query( $query );
			return $result;
		} 

	}

	/**
	 * Instantiate the Admin Object Class
	 */
	$admin = new Admin();

?>