	<?php
include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/sty.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
</head>
<tr>
<th><strong>id</strong></th>
<th><strong>RegNo</strong></th>
<th><strong>Name</strong></th>
<th><strong>Sex</strong></th>
<th><strong>Qualification</strong></th>
<th><strong>Phone</strong></th>
<th><strong>Email</strong></th>
<th><strong>DOB</strong></th>
<th><strong>Address</strong></th>
<th><strong>trn_date</strong></th>
<th><strong>submittedby</strong></th>
<th><strong>print</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
</tbody>
<?php
$count=1;
$sel_query="Select * from students ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["regno"]; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["sex"]; ?></td>
<td align="center"><?php echo $row["qualification"]; ?></td>
<td align="center"><?php echo $row["phone"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["dob"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["trn_date"]; ?></td>
<td align="center"><?php echo $row["submittedby"]; ?></td>

<td align="center">
<a href="print.php?id=<?php echo $row["id"]; ?>">print</a>
</td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
<body>
</table>
</div>
</body>
</html>