<?php
	/**
     * This File Contains User Class.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 26, 2013
     * @since December 26, 2013
	 */

	/**
	 * User Object Class
	 * 
	 */
	class Users {

		/**
		 * Counts Users.
		 * 
		 * @access public
		 * @return total number of Users 
		 */
		public function count() {
			global $db;
			$result =  $db->exe_query( "SELECT * FROM tbl_users" );
			$count = $db->num_rows( $result );

			if( $count == 0 ) {
				
			}
			return $count;
		}
	}

	/**
	 * Instantiate User Object Class.
	 */
	$user = new Users();
	
?>