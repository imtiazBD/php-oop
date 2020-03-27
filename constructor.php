<?php 

 class Person{
     public $name;
     public $age;
     public $email;
     public $phone;
     
     public function __construct($nam,$boyosh,$e,$p){
         $this->name=$nam;
         $this->age=$boyosh;
         $this->email=$e;
         $this->phone=$p;
         
         
     }
     public function personDetails(){
         echo "I'm Mr {$this->name} and my age is {$this->age}".'</br>';
     }
     
     // When i Will use {$this->name} that time i don't need concrate
     
     public function personAddress(){
         echo "My email is {$this->email} and {$this->phone} is my phone number";
     }
     
     
     
 }

  $personOutput = new Person("Imtiaz","25","e@gmail.com","01739972425");
  $personOutput->personDetails();
  $personOutput->personAddress();




?>