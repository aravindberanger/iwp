<?php
include("auth.php");
require('db.php');

if (isset($_GET['regno'])) {
    $regno = $_GET['regno'];

    $sel_query = "SELECT * FROM students WHERE regno = '$regno' ORDER BY id DESC;";
    $result = mysqli_query($con, $sel_query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Output student data as HTML
        echo "<table>";
        echo "<tr><td>id</td><td>{$row['id']}</td></tr>";
        echo "<tr><td>RegNo</td><td>{$row['regno']}</td></tr>";
        echo "<tr><td>Name</td><td>{$row['name']}</td></tr>";
        echo "<tr><td>Sex</td><td>{$row['sex']}</td></tr>";
        echo "<tr><td>Qualification</td><td>{$row['qualification']}</td></tr>";
        echo "<tr><td>Phone</td><td>{$row['phone']}</td></tr>";
        echo "<tr><td>Email</td><td>{$row['email']}</td></tr>";
        echo "<tr><td>DOB</td><td>{$row['dob']}</td></tr>";
        echo "<tr><td>Address</td><td>{$row['address']}</td></tr>";
        echo "<tr><td>trn_date</td><td>{$row['trn_date']}</td></tr>";
        echo "<tr><td>submittedby</td><td>{$row['submittedby']}</td></tr>";
        echo "</table>";
    } else {
        echo "Student not found";
    }
} else {
    echo "Invalid input";
}
?>
