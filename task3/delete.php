<?php
include("auth.php");
require('db.php');
$id=$_REQUEST['id'];

$submittedby = $_SESSION["username"];
echo "output" .$submittedby;
if($submittedby=="admin")
{
$query = "DELETE FROM students WHERE id=$id"; 

$result = mysqli_query($con,$query) or die ( mysqli_error($con));
header("Location: view.php"); 
exit();
}
else{
    echo " sorry..only admin can delete the record" ;
}
?>


