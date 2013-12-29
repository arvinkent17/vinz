<?php
	/**
     * This File Contains User Session Class.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 27, 2013
     * @since December 27, 2013
	 */
	class UserSession {

		/**
         * Verifies if Logged in or not.
         *  
         * @access private
         */
		private $logged_in;
		/**
         * User ID and Username
         *  
         * @access public
         */
		public $user_id;
		public $username;

		/**
          * Automatically Execute Method Calls and Other Functions.
          */
		function __construct() {
			session_start();
			$this->check_login();
		}

		/**
         * Check if User Logged in.
         *  
         * @access public
         * @return boolean TRUE or FALSE;
         */
		public function is_logged_in() {
			return $this->logged_in;
		}

		/**
         * Sessioning of User.
         *  
         * @param string $user
         * @access public  
         */
		public function login( $user ) {
			if( $user ) {
				$this->user_id = $_SESSION['user_id'] = $user->id;
				$this->username = $_SESSION['username'] = $user->username;
				$this->logged_in = true;
			}
		}

		 /**
          * Administrator logout.
          *  
          * Destroys User Session ID
          * Destroys Value of User ID
          *
          * @access public
          */
		public function logout() {
			unset( $_SESSION['user_id'] );
			unset( $this->user_id );
			$this->logged_in = false;
		}

		 /**
          * Check if User Already Logged in.
          *  
          * If not destroys the current value of user
          *
          * @access private
          * @return boolean TRUE or FALSE;
          */
		public function check_login(){
			if( isset( $_SESSION['user_id'] ) ) {
				$this->user_id = $_SESSION['user_id'];
				$this->logged_in = true;
			} else {
				unset( $this->user_id );
				$this->logged_in = false;
			}
		}
		
	}

	/**
	 * Instantiate the Admin Session Object Class
	 */
	$user_session = new UserSession();

?>