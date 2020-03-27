<?php 

class Person{
    public $name;
    public $age;
    
    public function personName($fname,$scend){
        
        
        $fullname = $this->name=$fname;
        $ageinfo = $this->age=$scend;
        $finalvalue = $fullname." Khandoker is ";
        echo $finalvalue.$ageinfo.'</br>';
        
        
        
    }
    
     public function personAge($value,$nam){
         
        echo $nam." is:".$this->age=$value.'</br>';
        
    }
}

// Class Property Access
/*
$output= new Person;
$result = $output->name;
echo $result;
*/
// Class Methods Access
//$output = new Person;
//Initialize Property value from outside Class
//$output->name=" Ariful Islam Khandoker ";
//$output->personName();

$name="Imtiaz";
$var="18 years old";
$output = new Person;
$output->personName($name,$var);
$output->personAge($var,$name);





?>