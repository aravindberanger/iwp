<?php
include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/stylev.css" />
</head>
<body>
<div class="form">
<p><a href="view.php">Index page</a>
    <a href="logout.php">Logout</a></p>

<html>
<head>
<title>STUDENT DETAILS</title>	
</head>
<body>
	<h1>Student Infomation</h1>
	<form>
		<fieldset>			
    <?php
$count=1;
$id=$_REQUEST['id'];
$sel_query="Select * from students where id = ".$id.";";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<legend>INFORMATION</legend>
<img  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['imgContent']); ?>"  align="right" width="100 height="100"/> 
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<label>id:</label>
<td align="left"><?php echo $row["id"]; ?></td><br><br>
<label>RegNo:</label>
<td align="left"><?php echo $row["regno"]; ?></td><br><br>
<label>Name:</label>
<td align="center"><?php echo $row["name"]; ?></td><br><br>
<label>Sex:</label>
<td align="center"><?php echo $row["sex"]; ?></td><br><br>
<label>Qualification:</label>
<td align="center"><?php echo $row["qualification"]; ?></td><br><br>
<label>Phone No:</label>
<td align="center"><?php echo $row["phone"]; ?></td><br><br>
<label>Email id:</label>
<td align="center"><?php echo $row["email"]; ?></td><br><br>
<label>DOB:</label>
<td align="center"><?php echo $row["dob"]; ?></td><br><br>
<label>Address:</label>
<td align="center"><?php echo $row["address"]; ?></td><br><br>

<?php $count++; } ?>
<button>print</button>
		</fieldset>
	</form>
</body>
</html>