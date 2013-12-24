<?php

	/**
     * This File Contains All File Controlling Directories.
     * 
     * @author Arvin Kent Lazaga <arvinkent17@gmail.com>
     * @copyright Arvin Kent Lazaga December 23, 2013
     * @since December 23, 2013
	 */

	/**
	 * File Directory Controller.
	 * 
	 * constant DS, constant SITE_ROOT, constant PATH1, constant PATH2, constant PATH3
	 * 
	 */
	defined("DS") ? NULL : define("DS", DIRECTORY_SEPARATOR);
	defined("SITE_ROOT") ? NULL : define("SITE_ROOT", DS."xampp".DS."htdocs".DS."E-Shop");
	defined("PATH1") ? NULL : define("PATH1", SITE_ROOT.DS."includes".DS."classes");
	defined("PATH2") ? NULL : define("PATH2", SITE_ROOT.DS."includes".DS."functions");
	defined("PATH3") ? NULL : define("PATH3", SITE_ROOT.DS."includes".DS."layouts");

	/**
	 * @global require_once load functions.php file  
	 */
	require_once(PATH2.DS."functions.php"); 
	/**
	 * @global require_once load database.php file  
	 */
	require_once(PATH1.DS."database.php"); 

?>