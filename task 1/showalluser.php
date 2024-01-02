<?php      
    include('connection.php');  
                      
        $sql = "select *from register";  
        $result = mysqli_query($con, $sql);  

        echo "<table border='5'>";
        echo "<th>username </th>";
        echo "<th>location</th>";
        echo "<th>phone</th>";
        
        if ($result->num_rows > 0) 
         {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
              echo "<tr>";
              echo "<td>" .$row["username"]. " </td> <td> " .$row["location"]. " </td> <td>" .$row["phone"]. "</td><br>";
              echo "</tr>";
                    }
          }
           else
         {
            echo "0 results";
          }

          echo "</table>";
          $con->close();
?>  
