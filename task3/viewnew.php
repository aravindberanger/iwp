///// DONT NEED JUST A SAMPLE CODE////



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
            <h1>Student Information</h1>
            <form>
                <fieldset>
                    <?php
                    $count = 1;
                    $id = $_REQUEST['id'];
                    $sel_query = "SELECT * FROM students WHERE id = " . $id . ";";
                    $result = mysqli_query($con, $sel_query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <legend>INFORMATION</legend>
                        <!-- Display student information here -->
                        <label>ID:</label>
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
                        <button>Print</button>
                    <?php
                        $count++;
                    }
                    ?>
                </fieldset>
            </form>
        </body>

        </html>
    </div>
</body>

</html>
