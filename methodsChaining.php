<?php
// Auto Load Class Normal vs Autoload 
// With Methods chinning

spl_autoload_register(function($filename){

		echo $filename."</br>";
	include ("class/".$filename.".php");
});



$output= new framework();
$output->laravel()->CakePHP()->iMVC();