<?php      
    include('connection.php');  
    $username = $_POST['user'];  
                   
        $sql = "select *from register where username = '$username' ";  
        $result = mysqli_query($con, $sql);  
        
        if ($result->num_rows > 0) 
         {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
              echo "username: " . $row["username"]. " - Location: " . $row["location"]. " - Phone: " . $row["phone"]. "<br>";
            }
          }
           else
         {
            echo "0 results";
          }
          $con->close();
?> 
