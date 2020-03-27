<?php 

class Person{
    public $name;
    public $age;
    const NAME = "Zibon Khan";
    
    // Constant is a property / no Access Modifier / no $ sign / declear by Capital World
    
    public function personName($fname,$scend){
        
        
        $fullname = $this->name=$fname;
        $ageinfo = $this->age=$scend;
        $finalvalue = $fullname." Khandoker is ";
        echo $finalvalue.$ageinfo.'</br>';
        
        
        
    }
    
     public function displayConstant(){
         echo "Output of Constant is ".Person::NAME;
     }
}

$name="imtiaz";
$var="18 years old";
$output = new Person;
$output->personName($name,$var);
$output->displayConstant();





?>