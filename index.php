<?php

/**
 * @name SYN Directory Listing (Simple Yet Nifty)
 * @desc Directory Listing Class
 * 
 *  With this file and the original wd_class.php that came with the package you can make
 *  a nice simple listing of what is in that directory.
 *  
 *  You can also sort by name, filesize and filetype (both ascending and descending)
 *  by clicking on the Topmost icon, "Filename" or "Size"
 *   
 * @author Olafur Waage, olafurw@gmail.com
 * @credits, Icons made by Mark James ( http://www.famfamfam.com/lab/icons/silk/ ) 
 * 
 * Distributed under the terms of the MIT License
 */

/**
 * This includes the class files
 *  
 * You can put the config file in another directory, then you'd only need to point
 * this 1st include to that directory, ie. include("../config.php"); if its in the
 * parent directory or include("class/config.php"); if its in the class directory
 */
include("config.php");
include($config["class_root"]."syn_class.php");

/**
 * The main class call, this is and the includes above are the only thing needed
 * to display the directory listing.
 */
$output = new synDirectory();