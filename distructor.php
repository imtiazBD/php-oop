<?php 

 class Person{
     public $name;
     public $age;
     public $email;
     public $phone;
     public $id;
     
     public function __construct($nam,$boyosh,$e,$p){
         $this->name=$nam;
         $this->age=$boyosh;
         $this->email=$e;
         $this->phone=$p;
         
         
     }
     public function personDetails(){
         echo "I'm Mr {$this->name} and my age is {$this->age}".'</br>';
     }
     
     // Distructor act at the last
     
     
      public function setId($id){
          $this->id = $id;
     }
      public function __destruct(){
       if(!empty($this->id)){
           echo "Saved";
       }     
      
      }
     
     public function personAddress(){
         echo "My email is {$this->email} and {$this->phone} is my phone number";
     }
     
     
     
 }

  $personOutput = new Person("Imtiaz","25","e@gmail.com","01739972425");
  $personOutput->setId(14);
  $personOutput->personDetails();





?>