<?php
$connection = mysql_connect('localhost', 'root', 'qwertyuiop')
or die("Opps some thing went wrong");
$db = mysql_select_db('visual', $connection)
or die("Opps some thing went wrong");



$step = $_POST['step'];
$actions = $_POST['actions'];
$outcomes = $_POST['outcomes'];
$constraints;


$field_values_array = $_REQUEST['field_name'];
foreach($field_values_array as $value){
    $query=mysql_query("INSERT INTO experiment(`name`,`aim`)
VALUES('$name','$aim')");
}


//query for storing the list of experiments
$query=mysql_query("INSERT INTO experiment(`name`,`aim`)
VALUES('$name','$aim')");

//query for storing steps and their aims in the step table
$query=mysql_query("INSERT INTO step(`name`,`aim`)
VALUES('$name','$aim')");

//query for storing animation name in the anim table
$query=mysql_query("INSERT INTO anim('name')
VALUES('$name')");

//query for storing object name in the object table
$query=mysql_query("INSERT INTO object('name')
VALUES('$object')");

//query for storing constraints in the cons table
$query=mysql_query("INSERT INTO const('cons')
VALUES('$cons')");
}





if(mysql_affected_rows()>0){
echo "1";
}else{
echo "2";
}
?>
