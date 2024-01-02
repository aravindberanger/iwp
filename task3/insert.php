  <?php
include("auth.php");
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $regno = $_REQUEST['regno'];
    $name = $_REQUEST['name'];
    $trn_date = date("Y-m-d H:i:s");
    $sex = $_REQUEST['sex'];
    $phone =$_REQUEST['phone'];
    $qualification = $_REQUEST['qualification'];
    $email = $_REQUEST['email'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $submittedby = $_SESSION["username"];

// for image /photo selection
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
    // end of image 
    
     
    if($submittedby=="admin")
    {
    $ins_query="insert into students(`regno`,`name`,`trn_date`,`sex`,`phone`,`qualification`,`email`,`dob`,`address`,`imgContent`,`submittedby`)values 
    ('$regno','$name','$trn_date','$sex','$phone','$qualification','$email','$dob','$address','$imgContent','$submittedby')";
   
     mysqli_query($con,$ins_query) or die(mysqli_error($con));

    $status="New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
    }
    else
    {
        echo "only admin can do this operation...";
    }
    }
   ?>


<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""  enctype="multipart/form-data"> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><lable>Enter the RegNo</lable>
<input type="text" name="regno" placeholder="Enter your RegNo" required></p>
<p><lable>Enter the Name</lable>
<input type="text" name="name" placeholder="Enter your Name" pattern="[a-zA-Z]{1,32}" required ></p>

<p><lable>Enter the Phone No</lable>
<input type="tel" id="phone" name="phone" placeholder="Enter your phone No" pattern="[0-9]{10}" required></p>
<p><lable>Enter Email</lable>
<input type="email" id="email" name="email" placeholder="Enter your Email" required></p>

<p><lable for="DOB">DOB</lable>
<input type="date" name="dob" require value="<?php echo $row['dob'];?>"></p>

<p><lable>sex</lable>
<input type="radio" name="sex" 
required value="male" />male
<input type="radio" name="sex" 
required value="female" />female
</p>
<p><lable>Qualification</lable>
<select name="qualification">
    <option value="B.Tech">B.Tech</option>
    <option value="BBA">BBA</option>
    <option value="MCA">MCA</option>
    <option value="B.Sc">B.sc</option>
    <option value="M.Sc">M.sc</option>
</select></p>

<p><label>Address</label></p>
<p><textarea rows="9" cols="70" name="address"></textarea></p>
<p><lable>Photo</lable>
    <input type="file" id="image" name="image"></p>

<p><input name="submit" type="submit" value="Submit" /> 
<input name="Reset" type="Reset" value="Reset" /> </p>
</fieldset>
<div>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</form>

</body>
</html>