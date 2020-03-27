<?php 

// Empty class r aijaigai faka methods create kora hoy .. ake 'implements' kore use korte hoy

interface School{
	public function mySchool();

	}

interface College{
	public function myCollege();

	}
interface Varsity{
	public function myVarsity();

	}
/**
*  
*/
class Teacher implements School,College,Varsity
{
	
	function __construct()
	{
		$this->mySchool();
		$this->myCollege();
		$this->myVarsity();

	}

	function mySchool(){
		echo "I am a School Teacher".'</br>';
	}

	function myCollege(){
		echo "I am a College Teacher".'</br>';
	}

	function myVarsity(){
		echo "I am a Varsity Teacher".'</br>';
	}
}

$teacher = new Teacher();