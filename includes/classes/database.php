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
	require_once(PATH1.DS."config.php");

	/**
	 * Database Object Class
	 *
	 * @package MysqlDatabase
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

?>	