<?php

$servername = "localhost";
$username = "root";
$password = "qwertyuiop";
$dbname = "virtual";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO step (name, description, action, outcome)
VALUES ('John', 'Doe', 'johnxample.com', 'aslkdfj')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
