<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){

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

//error_reporting(E_ALL); ini_set('display_errors',1);

	$field_values_array = $_REQUEST['field_name'];
	$name = $_REQUEST['stepfield'];
	$desc = $_REQUEST['descfield'];
	$outcome = $_REQUEST['outcomefield'];
	$action = $_REQUEST['actionfield'];
	
	
	$step = 1;
	$sql = "INSERT INTO step(name,description,action,outcome) VALUES('$name','$desc','$action','$outcome')";
if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


	foreach($field_values_array as $value){
		
		$sql = "INSERT INTO constrain(sid,cons) VALUES($step,'$value')";
if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
mysqli_close($conn);
}
?>