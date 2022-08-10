<?php 

// spl_autoload_register('myAutoLoader');

// function myAutoLoader($classname){
// 	$path = "classes/";
// 	$extension = ".class.php";
// 	require_once $path . $classname . $extension;


// 	if(!file_exists($fullPath)){
// 		return false;
// 	}

// }

spl_autoload_register('myAutoLoader');

function myAutoLoader($classname){
	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	if (strpos($url, 'includes') !== false) {
		$path = '../classes/';
	}
	else{
		$path = 'classes/';	
	}
	$extension = ".class.php";
	require_once $path . $classname . $extension;


}