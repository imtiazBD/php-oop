<?php
 include('functions.php')


?>


<html>
<body>
    <form method="post">
        
        <input type="number" name="nameOne" placeholder="Insert Number One"/>
        <input type="number" name="nameTwo" placeholder="Insert Number Two"/>
        <button type="submit" name="submit">Enter Now</button>
    
    </form>
    <hr>
    <h1>Output  </h1> 
    
    
    <?php 
    if(isset($_POST['submit'])){
    $fN = $_POST['nameOne'];
    $SN = $_POST['nameTwo'];
        
        if(!empty($fN))
        {
            echo "Field is empty";
        }
        
    echo "First Number is:".$fN.'</br>'."Secound Number is :".$SN."</br>";
           $result = new Math;
//           Function Call and pass value into the Function
        
           $result->add($fN,$SN); 
           $result->sub($fN,$SN); 
           $result->mul($fN,$SN); 
           $result->div($fN,$SN); 
       
        
    
    }

   

    ?>
    
</body>
</html>