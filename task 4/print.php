<?php
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="stylev.css" />
</head>
<body>
<div class="form">




	<h1>Student Infomation</h1>
	<form>
		<fieldset>			
    <?php
$count=1;

$sel_query="Select * from register where = ".$id";";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<legend>INFORMATION</legend>
<img  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['imgContent']); ?>" align="right" height = "150" width = "150" /> 
<label>Name</label>
<td align="center"><?php echo $row["name"]; ?></td><br><br>
<label>Email:</label>
<td align="center"><?php echo $row["email"]; ?></td><br><br>
<label>Number</label>
<td align="center"><?php echo $row["number"]; ?></td><br><br>
<label>Date of Birth</label>
<td align="center"><?php echo $row["dob"]; ?></td><br><br>
<label>Gender</label>
<td align="center"><?php echo $row["gender"]; ?></td><br><br>
<label>Addres </label>
<td align="center"><?php echo $row["add1"]; ?></td><br><br>
<label>Address 2:</label>
<td align="center"><?php echo $row["add2"]; ?></td><br><br>
<label>Location</label>
<td align="center"><?php echo $row["location"]; ?></td><br><br>
<label>City</label>
<td align="center"><?php echo $row["city"]; ?></td><br><br>
<label>Region</label>
<td align="center"><?php echo $row["region"]; ?></td><br><br>
<label>Code:</label>
<td align="center"><?php echo $row["code"]; ?></td><br><br>

<?php $count++; } ?>
<button>print</button>
		</fieldset>
	</form>
</body>
</html>