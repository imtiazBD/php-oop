<?php 

// Magic Methods 
/*
__construct()
__destruct()
__get($property) // Undefine property access
__set($property,$value) // Undefine property ,Value access
__call($method,$arg_array) // Undefine method acess ,Value pass=$arg_arry
*/

/**
* 
*/
class Student
{
	public $name;
	
	function describe()
	{
        echo "I am Student".'</br>';
	}

	function __get($pm){
		// Using get Methods
		echo "$pm does not exist".'</br>';
	}

	function __set($pm,$value){
		echo "We set $pm->$value".'</br>';
	}
	function __call($pm,$value){
		echo "There is no  set ".$pm."methods and arguments:".implode(',', $value).'</br>';
	}
}


$output = new Student();
$output->describe();
$output->Hasan;
$output->Hasan="is a name";
$output->Hasan="is a 2nd name";
// Call Methods .. not exists methods
$output->notExists('2','8','5');
