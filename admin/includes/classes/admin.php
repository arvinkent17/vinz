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
		* Admin Object Variables.
  		* 
  		* @access public
		*/
		public $id;
		public $username;
		public $password;

		public function find_all() {
			return $this->find_by_sql( "SELECT * FROM tbl_admin" );
		}

		public function find_by_id( $id = 0 ) {
			$result = $this->find_by_sql( "SELECT * FROM tbl_admin WHERE admin_id {$id} LIMIT 1" );
			return !empty( $result ) ? array_shift( $result ) : false;
		}

		public function count() {
			global $db;
			$result =  $db->exe_query( "SELECT * FROM tbl_admin" );
			$count = $db->num_rows( $result );
			return $count;
		}

		 /**
          * Authenticate Admin Username and Password when Logging in.
          *
          * @access public
          * @return boolean TRUE or False
          */
		public function authenticate( $username = "", $password = "" ) {
			global $db;
			$username = $db->escape_value( $username );
			$password = $db->escape_value( $password );
			$query = "SELECT * FROM tbl_admin ";
			$query .= "WHERE username = '{$username}' ";
			$query .= "AND hashed_password = '{$password}' ";
			$query .= "LIMIT 1";
			$result = $this->find_by_sql( $query );
			return !empty( $result ) ? array_shift( $result ) : false;
		} 

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
			$object->id = $record['admin_id'];
			$object->username = $record['username'];
			$object->password = $record['hashed_password'];
			return $object;
		}
	}

	/**
	 * Instantiate the Admin Object Class
	 */
	$admin = new Admin();

?>