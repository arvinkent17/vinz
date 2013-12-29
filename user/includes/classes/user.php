<?php
	/**
     * This File Contains User Class.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 27, 2013
     * @since December 27, 2013
	 */

	/**
	 * User Object Class
	 * 
	 */
	class Users {
		/**
		 * Admin Object Variables.
  		 * 
  		 * @access public
		 */
		public $id;
		public $username;
		public $password;

		/**
          * Authenticate User's Username and Password when Logging in.
          *
          * @access public
          * @return boolean TRUE or False
          */
		public function authenticate( $username = "", $password = "" ) {
			global $db;

			$username = $db->escape_value( $username );
			$password = $db->escape_value( $password );
			$hashed_password = sha1( $password );

			$query = "SELECT * FROM tbl_users ";
			$query .= "WHERE username = '{$username}' ";
			$query .= "AND hashed_password = '{$hashed_password}' ";
			$query .= "LIMIT 1";
			$result = $this->find_by_sql( $query );
			return !empty( $result ) ? array_shift( $result ) : false;
		} 

		/**
          * Query any SQL Commands and Generates an Array of object variables.
          *
          * @access public
          * @param string $sql
          * @return array 
          */
		public function find_by_sql( $sql = "" ) {
			global $db;
			$result = $db->exe_query( $sql );
			$object_array = array();
			while( $row = $db->fetch_row( $result ) ) {
				$object_array[] = $this->instantiate( $row );
			}
			return $object_array;
		}

		/**
		 * Instantiate a new Object of it Self.
		 *
		 * Pass the array values of each inside of a object variables
		 * 
		 * @access private
		 * @param array $record
		 * @return new object  
		 */
		private function instantiate( $record ) {
			$object = new self;
			$object->id = $record['user_id'];
			$object->username = $record['username'];
			$object->password = $record['hashed_password'];
			return $object;
		}

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