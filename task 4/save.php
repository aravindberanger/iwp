<?php      
    include('connection.php');  
    $name = $_POST['name'];  
    $email = $_POST['email'];
    $number = $_POST['number'];	
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $location= $_POST['location']; 
    $city = $_POST['city'];
    $region = $_POST['region'];
    $code = $_POST['code']; 
    $time = date("Y-m-d H:i:s");

    if(!empty($_FILES["image"]["name"])) 
          { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes))
        { 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
        }
    }
                
        $sql = "INSERT INTO register VALUES ('$name','$email','$number','$dob','$gender','$add1','$add2',
'$location','$city','$region','$code','$imgContent','$time')"; 
        
      if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
        
?>  