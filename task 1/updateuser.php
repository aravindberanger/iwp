<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $location = $_POST['location'];
    
                
        $sql = "UPDATE register SET location='$location' WHERE username='$username'"; 
        
      if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
        
?>  
