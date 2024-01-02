<?php
include("auth.php");
require('db.php');
$id = $_REQUEST['id'];
$query = "SELECT * from students where id='" . $id . "'"; 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
 <a href="insert.php">Insert New Record</a> 
  <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id = $_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$phone =$_REQUEST['ph_no'];
$sex = $_REQUEST['sex'];
$qualification = $_REQUEST['Qualification'];
$email = $_REQUEST['Email'];
$DOB = date("y-m-d");
$address = $_REQUEST['Address']; 
$submittedby = $_SESSION["username"];

$update = "update students set trn_date='".$trn_date."',name='".$name."',phone='".$phone."',sex='".$sex."',qualification='".$qualification."',
email='".$email."',dob='".$DOB."',address='".$address."',submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con,$update) or die(mysqli_error($con));

$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
else
{
}
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="id" placeholder="Enter id" required value="<?php echo $row['id'];?>" /></p>
<p><input type="text" name="name" placeholder="Enter name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="sex" placeholder="Enter sex" required value="<?php echo $row['sex'];?>" /></p>
<p><input type="text" name="Qualification" placeholder="Enter Qualification" required value="<?php echo $row['qualification'];?>" /></p>
<p><input type="text" name="ph_no" placeholder="Enter ph_no" required value="<?php echo $row['phone'];?>" /></p>
<p><input type="text" name="Email" placeholder="Enter Email" required value="<?php echo $row['email'];?>" /></p>
<p><input type="text" name="DOB" placeholder="Enter DOB" required value="<?php echo $row['dob'];?>" /></p>
<p><input type="text" name="Address" placeholder="Enter Address" required value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="action" placeholder="Enter Action" required /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
</div>
</div>
</body>
</html>
