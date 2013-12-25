<?php 

	/**
     * This File Contains Admin Session Class.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 24, 2013
     * @since December 24, 2013
	 */

	/**
	 * Admin Session Object Class
	 * 
	 */
	class AdminSession {

		/**
         * Verifies if Logged in or not.
         *  
         * @access private
         */
		private $logged_in;
		/**
         * Admin ID.
         *  
         * @access public
         */
		public $admin_id;

		 /**
          * Automatically Execute Method Calls and Other Functions.
          */
		function __construct() {
			session_start();
			$this->check_login();
		}

		/**
         * Check if Admin Logged in.
         *  
         * @access public
         * @return boolean TRUE or FALSE;
         */
		public function is_logged_in() {
			return $this->logged_in;
		}

		/**
         * Sessioning of Admin.
         *  
         * @param string $admin
         * @access public  
         */
		public function login( $admin ) {
			if( $admin ) {
				$this->admin_id = $_SESSION['admin_id'] = $admin->id;
				$this->admin_id = $_SESSION['username'] = $admin->username;
				$this->admin_id = $_SESSION['password'] = $admin->password;

				$this->logged_in = true;
			}
		}

		 /**
          * Administrator logout.
          *  
          * Destroys Admin Session ID
          * Destroys Value of Admin ID
          *
          * @access public
          */
		public function logout() {
			unset( $_SESSION['admin_id'] );
			unset( $this->admin_id );
			$this->logged_in = false;
		}

		 /**
          * Check if Admin Already Logged in.
          *  
          * If not destroys the current value of admin
          *
          * @access private
          * @return boolean TRUE or FALSE;
          */
		public function check_login(){
			if( isset( $_SESSION['admin_id'] ) ) {
				$this->admin_id = $_SESSION['admin_id'];
				$this->logged_in = true;
			} else {
				unset( $this->admin_id );
				$this->logged_in = false;
			}
		}

	}

	/**
	 * Instantiate the Admin Session Object Class
	 */
	$admin_session = new AdminSession();

?>