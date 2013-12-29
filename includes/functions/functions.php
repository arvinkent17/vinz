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
		$output .= "<div id=\"alertsuccess\" class=\"alert alert-success\">";
     	$output .= "<a class=\"nav-text pull-right close-mark\">";
     	$output .= "<button type=\"button\" class=\"close\" id=\"closex\" aria-hidden=\"true\">&times;</button></a>";
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
		$output .= "<p id=\"alertdanger1\" class=\"alert alert-danger\">";
     	$output .= "<a class=\"nav-text pull-right close-mark\">";
     	$output .= "<button type=\"button\" class=\"close\" id=\"closex\" aria-hidden=\"true\">&times;</button></a>";
     	$output .= "{$message}";
     	$output .= "</p>";
     	
     	return $output;

	}

	/**
	 * Output Error Message.
	 * 
	 * @param string $message, string $modalname
	 * @return string
	 */
	function output_messagev3( $message = "", $modalname = "" ) {
		
		global $globalsearchtext;
						    				  
		$output = "";
		$output .= "<div class=\"alert alert-info\">";
     	$output .= "<div class=\"row\"<h3 class=\"pull-left\"id=\"infosearch\">{$message}<a href={$modalname} data-toggle=\"modal\" class=\"btn-link pull-right\"> Search Again?</a></h3>";
     	$output .= "</div></div>";
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

		include( PPATH3.DS."{$template}" );

	}

?>