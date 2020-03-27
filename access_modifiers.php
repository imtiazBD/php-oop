<?php 

//Akta class extenden korte na chaile tar age "final" use korte hoy

   class fatherClass{
     
          privet $name;
          // same class a use kora jabe
          public $age;
          protected $result;
          // oe class or sub class a property / methods use kora jabe
    
    
    public final function fatherProfile($fname,$fage)
                   {
        
        $this->name=$fname;
        $this->age=$fage;
        echo "My father name is {$this->name} and his age is {$this->age}".'</br>';
        
                                               }    
                    }

    class child extends fatherClass{
    
                 public $lavel;
        
//Akta function second time use na korte dite chaile tar age  "final" use korte hoy

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

    