<?php 

class Person{
    public $name;
    public $age;
    const NAME = "Zibon Khan";
    public static $id="142-15-138";
    public static $output="Static variable";
    
    // Static Methods and Static Property
    
    public function personName($fname,$scend){    
      $this->name=$fname;
      $this->age=$scend;
        
    echo "This is  name {$this->name} and his age is  {$this->age} ".'</br>';
    
       echo "Student ID is ".self::$id.'</br>'; 
       echo "Student ID is ".self::$output.'</br>';        
    }
    
     public static function displayConstant(){
         echo "Output of Constant is ".Person::NAME;
     }
}

$name="imtiaz";
$var="18 years old";
$output = new Person;
$output->personName($name,$var);
// Here is the declearing systeam of Static Method
Person::displayConstant();




?>