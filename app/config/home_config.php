<?php 
/**
 *	This is where you store the metadata for each page. 
 *	Included before the objectd and view. 
 *	You can store constants in the GLOBAL_CONFIG file that can be accessed 
 *	the config class too. 
 *
 *	All static variables can be accessed by config::$variable name
 */

class config extends global_config{
	public static $pageTitle 			= "Scranton Disc Golf Association | Home"; 
	public static $pageDescription 		= "Description for the homepage"; 

	public static $stylesheets 			= array(); //Include stylesheets 
	public static $javascript 			= array("js/index.js"); //Include javascript files

	public static $header				= "header"; //False if no header file otherwise the file name in the /app/views/includes/foo.php 
	public static $footer 				= "";	//Same as header 

}
?>