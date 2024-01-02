<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "task5";

    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if($con->connect_error){
        exit('Could not connect');
    }

    $regno = $_GET['q'];
    $sql = "SELECT * FROM result WHERE regno = '$regno' ";

    $query = mysqli_query($con, $sql);

    if (!$query) {
        echo ("Error description: " . mysqli_error($con));
    }

    echo "<table border='1' style = 'border-collapse:collapse;'>
            <tr>
                <th style='padding:10px;'>RegNo</th>
                <th style='padding:10px;'>Name</th>
                <th style='padding:10px;' >CGPA</th>
                <th style='padding:10px;' >Date</th>

                <th style='padding:10px;' >Subject</th>
            </tr>
        ";

    if (mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td style='padding:10px;'>" .
                $result['regno'] . "</td>";
            echo "<td style='padding:10px;'>" .
                $result['name'] . "</td>";
            echo "<td style='padding:10px;'>" .
                $result['cgpa'] . "</td>";
            echo "<td style='padding:10px;'>" .
                $result['trn_date'] . "</td>";
            ?>
            <td style='padding:10px;'> 
            <label for="subject">Choose a subject:</label>
            <select name="subject" id="subjects">
              <option value="subject1">subject1:<?php echo $result['subject1'];?></option>
              <option value="subject2">subject2:<?php echo $result['subject2'];?></option>
              <option value="subject3">subject3:<?php echo $result['subject3'];?></option>
            </select>
             </td>
             <?php   
            echo "</tr>";
            }
        echo "</table>";
        mysqli_close($con);
    }
?>
