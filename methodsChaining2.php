<?php
// Auto Load Class Normal vs Autoload 
// With Methods chinning

spl_autoload_register(function($filename){

		echo $filename."</br>";
	include ("class/".$filename.".php");
});


$cal= new Calculation();
echo "Result is:".$cal->getValue(4,5)->getResult();
?>