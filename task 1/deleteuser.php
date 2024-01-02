<?php      
    include('connection.php');  
    $username = $_POST['user'];  
 
      $sql = "delete from register WHERE username='$username'"; 
        
      if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
        
?>  
