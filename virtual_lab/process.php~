<?php

//request the given inputs from the wizard input elements
if (isset($_POST['insert'])) {
    $servername = "localhost";
    $username = "root";
    $password = "qwertyuiop";
    $dbname = "virtual";
echo $_POST['insert'];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }



    $field_values_array = $_POST['field_name'];
    $name = $_POST['stepfield'];
    $desc = $_POST['descfield'];
    $outcome = $_POST['outcomefield'];
    $action = $_POST['actionfield'];


    $step = 1;
    echo $field_values_array;
    echo $step;
    $sql = "INSERT INTO step(name,description,action,outcome) VALUES('$name','$desc','$action','$outcome')";
    mysqli_query($conn, $sql);


    foreach ($field_values_array as $value){

        $sql = "INSERT INTO constrain(sid,cons) VALUES($step,'$value')";
        mysqli_query($conn, $sql);

    }
    mysqli_close($conn);
}
?>





