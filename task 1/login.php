<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
                
        $sql = "select *from register where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
        {  
            echo "<h1><center> Login successful </center></h1>"; 
            echo "<h4>Welcome ".$username."</h4>" ;
            echo "<br> <a href='register.html'> Add User </a></br>" ;
            echo "<br> <a href='updateuser.html'> Update User </a> <br>" ;
            echo "<br> <a href='deleteuser.html'> Delete User </a><br>" ;
            echo "<br> <a href='searchuser.html'> Search User </a><br>" ;
            echo "<br> <a href='showalluser.php'> Show All Users </a><br>" ;
                    
        }  
        else
        {  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            
        }     
?>  
