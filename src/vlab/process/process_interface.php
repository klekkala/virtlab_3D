<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){

    $servername = "localhost";
    $username = "root";
    $password = "kiran";
    $dbname = "virtual";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $source = $_REQUEST['src'];
    $step = $_REQUEST['step_number']


        $sql = "INSERT INTO step(animation) VALUES('$source') WHERE step.sid==$step";
    if (mysqli_query($conn, $sql) != 0) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
