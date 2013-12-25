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
	 * Output Success Message.
	 * 
	 * @param string $message
	 * @return string
	 */
	function output_messagev1( $message = "" ) {
		$output = "";
		$output .= "<div class=\"alert-message success\">";
     	$output .= "<a class=\"close\" id=\"closex\">×</a>";
     	$output .= "<h4 class=\"list-group-item-heading\">{$message}</h4>";
     	$output .= "</div>";
     	return $output;
	}

	/**
	 * Output Error Message.
	 * 
	 * @param string $message
	 * @return string
	 */
	function output_messagev2( $message = "" ) {
		$output = "";
		$output .= "<p class=\"alert-message error\">";
     	$output .= "<a class=\"close\" id=\"closex\" >×</a>";
     	$output .= "{$message}";
     	$output .= "</p>";
     	return $output;
	}

	/**
	 * Automatically Check if the  Object Class exist or not.
	 * 
	 * @param string $class_name
	 * @throws error message if file not found in the directory
	 */
	function __autoload( $class_name ) {
		$class_name = strtolower( $class_name );
		$class_path = PPATH1.DS."{$class_name}";
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