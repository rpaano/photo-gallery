<?php 

	function classAutoLoader($class){

		$class = strtolower($class);

		$the_path = "includes/{$class}.php";

		// if (file_exists($the_path)) {

		//  	require_once($the_path);

		// }else{

		// 	die("This file named {$class}.php was not found..");
			
		// }

		if (is_file($the_path) && !class_exists($class)) {
				
			include $the_path;
		}else{
			die("The {$class}.php does not exist");
		}

	}

	spl_autoload_register('classAutoLoader');

 ?>