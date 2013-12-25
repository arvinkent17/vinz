<?php

	/**
     * This File Contains Database Class.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 23, 2013
     * @since December 23, 2013
	 */

	/**
	 * @global require_once Loads config.php File
	 */
	require_once(PPATH2.DS."config.php");

	/**
	 * Database Object Class
	 *
	 */
	class MysqlDatabase {
		
		/**
		 * Connection and Database Variables.
		 *
		 * @access private
		 */
		private $connection;
		private $db_select;

		/**
		 * User input cleaner Variables.
		 * 
		 * @access public
		 */
		public $magic_quote;
		public $escape_string;

		/**
		 * Automatically Execute Method Calls and Other Functions.
		 */
		function __construct() {
			$this->open_connection();
			$this->magic_quote = get_magic_quotes_gpc();
			$this->escape_string = function_exists("mysql_real_escape_string");
		}

		/**
		 * User Input Cleaner to Avoid Problem.
		 *
		 * @param string $value
		 * @access public 
		 * @return new cleaned input
		 */
		public function escape_value( $value ) {
			if( $this->escape_string ) {
				if ( $this->magic_quote ) {
					$value = stripslashes( $value );
				}
				$value = mysql_real_escape_string( $value );
			} else {
				if ( !$this->magic_quote ) {
					$value = addslashes( $value );
				}
			}
			return $value;
		}

		/**
   		 * Initiliazing Server Connection and Database Selection. 
   		 * 
   		 * @access public
   		 * @throws error message if Server not found or Database not found
		 */
		public function open_connection() {
			$this->connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
			if( !$this->connection ) {
				die( "Error: Server not Found. <br />" . mysql_error() );
			}
			$this->db_select = mysql_select_db(DB_NAME, $this->connection);
			if( !$this->db_select ) {
				die( "Error:Database not Found. <br />" . mysql_error() );
			}
		}

		/**
		 * Executes Any SQL Commands.
		 *
		 * @access public
		 * @return result of SQL Command
		 */
		public function exe_query( $query = "" ) {
			$result = mysql_query( $query );
			$this->confirm_query( $result );
			return $result;
		}

		/**
		 * Checks SQL Commands.
		 *
		 * @access public
		 * @throws error message if SQL Command is Invalid
		 */
		public function confirm_query( $result ) {
			if ( !$result ) {
				die( "Error SQL Command is Invalid <br />" . mysql_error() );
			}
		}

		/**
		 * Fetch a Row from Database Table.
		 *
		 * @access public
		 * @return 1 row of a Database Table
		 */
		public function fetch_row( $result ) {
			return mysql_fetch_array( $result );
		}

		/**
		 * Counts number of Field Names in a Database Table.
		 *
		 * @access public
		 * @return number of fields
		 */
		public function num_fields( $result ) {
			return mysql_num_fields( $result );
		}

		/**
		 * Lists Database Table Field Names. 
		 *
		 * @access public
		 * @return field names
		 */
		public function field_names( $result , $offset ) {
			return mysql_field_name( $result, $offset );
		}

		/**
		 * Counts All Rows in a Database Table. 
		 *
		 * @access public
		 * @return number of Rows
		 */
		public function num_rows( $result ) {
			return mysql_num_rows( $result );
		}

		/**
		 * Check a change or update of a Row in a Database Table. 
		 *
		 * @access public
		 * @return boolean TRUE or FALSE
		 */
		public function data_change() {
			return mysql_affected_rows( $this->connection );
		} 

		/**
		 * Check if there was Inserted new ID to the Database Table.
		 *
		 * @access public
		 * @return boolean TRUE or FALSE
		 */
		public function check_id() {
			return mysql_insert_id( $this->connection );
		}

		/**
   		 * Closing Server Connection. 
   		 * 
   		 * @access public
   		 * 
		 */
		public function close_connection() {
			if( isset( $this->connection ) ) {
				mysql_close($this->connection);
				unset($this->connection);
			}
		}
	}

	/**
	 * Instantiate the Database Object Class
	 */
	$db = new MysqlDatabase();

?>	