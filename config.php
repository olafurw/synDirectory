<?php

/**
 * Index Config
 * 
 * class_root
 * 
 * Put the location of the class file (syn_class.php)
 * i.e. if its in this directory, make it empty
 * if its in the directory below, put "../"
 * if its in a directory above called "classes", put "classes/"
 * if its in a directory below this one called "classes", put "../classes/"
 * if its in /var/www/classes/ then put that
 */
$config["class_root"] = "";

/**
 * lang
 * 
 * Translate the phrases used within the system
 */
$lang["filename"] = "Filename:";
$lang["last_modified"] = "Last Modified:";
$lang["size"] = "Size:";
$lang["index_of"] = "Index of";
$lang["directories"] = "Directories";
$lang["files"] = "File(s)";
$lang["parent_dir"] = "Parent Directory";

/**
 * show_dir
 * 
 * Do you want to show directories that are within the current one ?
 */
$config["show_dir"] = true;

/**
 * show_parent_dir
 * 
 * Do you want to show the parent directory link ".." ?
 */
$config["show_parent_dir"] = true;

/**
 * show_files
 * 
 * Do you want to show files that are within the current directory?
 */
$config["show_files"] = true;

/**
 * show_file_extensions
 * 
 * Do you want to show file extensions?
 */
$config["show_file_extensions"] = true;

/**
 * show_icons
 * 
 * Do you want to show the default icons?
 */    
$config["show_icons"] = true;

/**
 * show_size
 * 
 * Do you want to show file sizes?
 */
$config["show_size"] = true;

/**
 * show_last_modified
 * 
 * Do you want to show file modification date?
 */
$config["show_last_modified"] = true;

/**
 * show_only
 * 
 * An array of file extensions that you want only to display
 *
 * Uncomment the lines below to only show mp3 and txt files
 * to show only more types, just add new lines with different extensions
 */

# $config["show_only"][] = "mp3";
# $config["show_only"][] = "txt";

/**
 * show_header
 * 
 * Do you want to show the directory header?
 * i.e. "Index of /downloads/files/"
 */
$config["show_header"] = true;

/**
 * show_dir_statistics
 * 
 * Do you want to show directory statistics? (number of files, total filesize etc)
 */
$config["show_dir_statistics"] = true;

/**
 * show_server_info
 * 
 * Do you want to show server info?
 * i.e. "Apache/1.3.33 Server at example.com Port 80"
 * Note, on some servers, this info is empty. So it will not show up.
 */
$config["show_server_info"] = true;
