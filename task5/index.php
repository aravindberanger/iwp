<!DOCTYPE html>
<html>

<head>
    <style>
        input {
            padding: 0.5rem 2rem;
        }
    </style>
</head>

<body>
    <h1 style="color:green;">Student Information System</h1>
    <h3>View Student Result</h3>
    <hr><br>
    <form>
        <label> Enter the Register Number : </label>
        <input type="text" name="regno" id="regno">
        <input type='button' onclick='ajax_fun()' value='Submit' />
    </form>
    <br>
    <hr>
    <div id="result-box">Result will display here</div>

    <script language="javascript" type="text/javascript">
            
        function ajax_fun() {

            const ajax_Request = new XMLHttpRequest();

            ajax_Request.onreadystatechange = function() {

                if (ajax_Request.readyState == 4 && this.status == 200) {
                    document.getElementById("result-box").innerHTML =
                    ajax_Request.responseText;
                }
            }
            var str = document.getElementById('regno').value;

            ajax_Request.open("GET", "connection.php?q=" + str, true);
            ajax_Request.send();
        }
    </script>
</body>
</html>
