<?php

	/**
     * This File Contains All Basic Functions.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 23, 2013
     * @since December 23, 2013
	 */

	/**
	 * Redirect Any Page. 
	 * 
	 * @param string $location
	 */
	function redirect_to( $location = "" ) {
		if( $location != "" ) {
			header( "location: {$location}" );
			exit();
		}
	}

	/**
	 * Output Message.
	 * 
	 * @param string $message
	 * @return string
	 */
	function output_message( $message = "" ) {
		$output = "<div class=\"\">";
		$output .= $message;
		$output .= "</div>";
	}

	/**
	 * Automatically Check if the  Object Class exist or not.
	 * 
	 * @param string $class_name
	 * @throws error message if file not found in the directory
	 */
	function __autoload( $class_name ) {
		$class_name = strtolower( $class_name );
		$class_path = PATH1.DS."{$class_name}";
		if ( file_exists( $filename ) ) {
			require_once( $class_path );
		} else {
			die( "{$class_path}.php not found" );
		}
	}

	/**
	 * Include Part of PHP or HTML File.
	 * 
	 * @param string $template
	 */
	function include_temp( $template = "" ) {
		include( PATH3.DS."{$template}" );
	}

?>