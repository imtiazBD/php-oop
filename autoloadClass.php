<?php
// Auto Load Class Normal vs Autoload 
//Systeam 1
// include("class/Ruby.php");
// include("class/Java.php");
// include("class/Php.php");
//Systeam 2

// function __autoload($filename){
// 	echo $filename."</br>";
// 	include ("class/".$filename.".php");
	//foldername/filename-file extension
//}
//Systeam 3

//Bikolpo systeam

spl_autoload_register(function($filename){

		echo $filename."</br>";
	include ("class/".$filename.".php");
});



$Ruby = new Ruby();
$Java = new Java();
$Php = new Php();