<?php


/* 

Direct instantiat kora jabe nah mane object creat kora jabe nah
interface a multiple class k extends kora jai kintu abstruct class a kora jai nah.
*/
abstract class Student{
	public $name;
	public $age;
	 function details(){
		echo "Name is {$this->name} and age is {$this->age} ";

	}
	abstract public function School();
}

class boy extends Student{
	public function describe(){
		return parent::details()."and high school student";

	}

	public function School(){
		return "I Like to read Book";
	}
}

$s = new boy();
$s->name="Kamal";
$s->age="19";
$s->describe();
$s->School();

