<?php

require('db.php');

$sel_query = "SELECT * FROM students ORDER BY id DESC;";
$result = mysqli_query($con, $sel_query);

if (!$result) {
    die('Error fetching records: ' . mysqli_error($con));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td align="center">' . $row["id"] . '</td>';
    echo '<td align="center">' . $row["regno"] . '</td>';
    echo '<td align="center">' . $row["name"] . '</td>';
    echo '<td align="center">' . $row["sex"] . '</td>';
    echo '<td align="center">' . $row["qualification"] . '</td>';
    echo '<td align="center">' . $row["phone"] . '</td>';
    echo '<td align="center">' . $row["email"] . '</td>';
    echo '<td align="center">' . $row["dob"] . '</td>';
    echo '<td align="center">' . $row["address"] . '</td>';
    echo '<td align="center">' . $row["trn_date"] . '</td>';
    echo '<td align="center">' . $row["submittedby"] . '</td>';
    echo '<td align="center"><a href="print.php?id=' . $row["id"] . '">print</a></td>';
    echo '<td align="center"><a href="edit.php?id=' . $row["id"] . '">Edit</a></td>';
    echo '<td align="center"><a href="delete.php?id=' . $row["id"] . '">Delete</a></td>';
    echo '</tr>';
}
?>
