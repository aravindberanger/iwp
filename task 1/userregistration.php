<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone= $_POST['phone']; 
    $location= $_POST['location']; 
                
        $sql = "INSERT INTO register VALUES ('$username', '$password','$email',$phone,'$dob','$location')"; 
        
      if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
        
?>  
