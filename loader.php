<?php
/**
 * Static methods to load the required module
 *
 * @version 0.1 
 * @package Froyo_Load
 * @author Froyo Story
 * @license MIT
 */
class Froyo_Load {

	/**
	 * Load the class from the file. The file name must be formatted as "$class.php".
	 *
	 * @param $class : string - is a name of the class
	 * @return void
	 */
	public static function loadClass($class) {
		
		// create the file name from the class name and load it up to the memory
		$get_file = function($name) {
			$lowername = strtolower($name);
			$file_path = "{$lowername}/{$lowername}.php";
			
			include_once $file_path;
		};

		// get class name
		$get_class = function() use ($get_file, $class) {
			$get_file($class);
		};

		$get_class();
	}
}