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
	defined("APATH1") ? NULL : define("APATH1", SITE_ROOT.DS."admin".DS."includes".DS."classes");
	defined("APATH2") ? NULL : define("APATH2", SITE_ROOT.DS."admin".DS."includes".DS."functions");
	defined("APATH3") ? NULL : define("APATH3", SITE_ROOT.DS."admin".DS."includes".DS."layouts");
	defined("PPATH1") ? NULL : define("PPATH1", SITE_ROOT.DS."includes".DS."classes");
	defined("PPATH2") ? NULL : define("PPATH2", SITE_ROOT.DS."includes".DS."functions");

	/**
	 * @global require_once load functions.php file  
	 */
	require_once(PPATH2.DS."functions.php");
	/**
	 * @global require_once load admin-session.php file  
	 */
	require_once(APATH1.DS."session.php");  
	/**
	 * @global require_once load database.php file  
	 */
	require_once(PPATH1.DS."database.php"); 
	/**
	 * @global require_once load admin.php file  
	 */
	require_once(APATH1.DS."admin.php"); 


?>