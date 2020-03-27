<?php 
include("student.php");

// Class and Methods Existences
/*


/**
* 
*/
if (class_exists("Student")) {
    
    $output = new Student();
    // Methods Cheack
    if (method_exists($output,'details')) {
        
        $output->details();
       
     }
     else {
     	echo "Methods does not exists"."</br>";
     }
    $output->profile();


}
else {
	echo "Class not Found";
}

