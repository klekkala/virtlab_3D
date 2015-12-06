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

    $object_array = $_REQUEST['object_array'];
    $step = $_REQUEST['step_number'];


    foreach($object_array as $object){

        $sql = "INSERT INTO object(sid, name) VALUES($step, '$object')";
        if (mysqli_query($conn, $sql) != 0) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }


    mysqli_close($conn);
}
?>
