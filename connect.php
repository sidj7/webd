<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "demo";  
      
    $con = new mysqli($host, $user, $password, $db_name);  
    if($con->connect_error) {  
        die("Failed to connect with MySQL: ". $con->connect_error);  
    }
?>  