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
    <style>
  
input[type = "button"] {
  background: #5E5DF0;
  border-radius: 999px;
  box-shadow: #5E5DF0 0 10px 20px -10px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding: 4px 5px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  border: 0;
}

</style>
 
</head>

<body>
    <form>
        <p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
        <h2>View Records</h2>
        <table width="100%" border="1" style="border-collapse:collapse;">
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
            <?php
            $count = 1;
            $sel_query = "SELECT * from students ORDER BY id desc;";
            $result = mysqli_query($con, $sel_query);
            while ($row = mysqli_fetch_assoc($result)) { ?>
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
                    <input type='button' onclick='ajax_print(<?php echo $row["id"]; ?>)' value='Print' />
                </td>
                <td align="center">
                    <input type='button' onclick='ajax_edit(<?php echo $row["id"]; ?>)' value='Edit' />
                </td>
                <td align="center">
                    <input type='button' onclick='ajax_delete(<?php echo $row["id"]; ?>)' value='Delete' />
                </td>
                </tr>
            <?php $count++;
            } ?>
        </table>
    </form>
    <br>
    <hr>
    <div id="result-box">Result will display here</div>

    <script language="javascript" type="text/javascript">
        function ajax_print(id) {
            const ajax_Request = new XMLHttpRequest();

            ajax_Request.onreadystatechange = function () {
                if (ajax_Request.readyState == 4 && ajax_Request.status == 200) {
                    document.getElementById("result-box").innerHTML = ajax_Request.responseText;
                }
            };
            var str = id; // Use the 'id' parameter directly

            ajax_Request.open("GET", "print.php?id=" + str, true);
            ajax_Request.send();
        }

        function ajax_edit(id) {
            const ajax_Request = new XMLHttpRequest();

            ajax_Request.onreadystatechange = function () {
                if (ajax_Request.readyState == 4 && ajax_Request.status == 200) {
                    document.getElementById("result-box").innerHTML = ajax_Request.responseText;
                }
            };
            var str = id; // Use the 'id' parameter directly

            ajax_Request.open("GET", "edit.php?id=" + str, true);
            ajax_Request.send();
        }

        function ajax_delete(id) {
            // Construct the URL with the id parameter
            const url = 'delete.php?id=' + id;

            // Create an XMLHttpRequest object
            const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the AJAX response here
                    // You can update the page or perform other actions
                }
            };

            // Make the AJAX request
            xhr.open('GET', url, true);
            xhr.send();
        }
    </script>
</body>

</html>
