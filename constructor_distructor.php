<?php 

 class userData{
     public $a;
     public $b;
 
     
     public function __construct($userName,$userId){
         $this->a = $userName;
         $this->b = $userId;
            
        echo "User Name is {$this->a} and ID is {$this->b}";

         
         
     }
     
      public function __destruct(){
          unset($this->a);         
          unset($this->b);

     
      }
     
   
     
     
 }
  // When i will pass data into constructor by class . 
  $user ="Mamun";
  $id =15;
  $ur = new userData($user,$id);





?>