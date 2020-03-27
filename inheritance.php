<?php 

// Inheritance class practise 

    class fatherClass{
     
          public $name;
          public $age;
    
    
    public function fatherProfile($fname,$fage)
                   {
        
        $this->name=$fname;
        $this->age=$fage;
        echo "My father name is {$this->name} and his age is {$this->age}".'</br>';
        
                                               }    
                    }

    class child extends fatherClass{
    
                 public $lavel;

        public function fatherProfile($lavel){
            $this->lavel=$lavel;
        
        echo "My father name is {$this->name} and his age is {$this->age} and he is living at {$this->lavel}".'</br>';
        
                                               }   
    
                                   } 

$classOne = new fatherClass;

$classOne->fatherProfile("Rafiquel Islam Khandoker","51");

// Accessing the fatherClass from Child Class

$classTwo = new child;
$place="Sirajganj";
$classTwo->fatherProfile("Rafiquel Islam Khandoker","51",$place);

    