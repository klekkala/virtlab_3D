<?php
$connection = mysql_connect('localhost', 'root', 'qwertyuiop')
or die("Opps some thing went wrong");
$db = mysql_select_db('visual', $connection)
or die("Opps some thing went wrong");



$step = $_POST['step'];
$actions = $_POST['actions'];
$outcomes = $_POST['outcomes'];
$constraints;

$query=mysql_query("INSERT INTO experiment(`name`,`aim`)
VALUES('$name','$aim')");

$query=mysql_query("INSERT INTO step(`name`,`aim`)
VALUES('$name','$aim')");

$query=mysql_query("INSERT INTO anim(`name`,`aim`)
VALUES('$name','$aim')");

$query=mysql_query("INSERT INTO object(`name`,`aim`)
VALUES('$name','$aim')");

$query=mysql_query("INSERT INTO const(`name`,`aim`)
VALUES('$name','$aim')");
}

else if($value == 'action'){
$password = $_POST['pass'];
$query=mysql_query("INSERT INTO $db_name(`name`,`password`)
VALUES('$name','$encrypted')");
}




if(mysql_affected_rows()>0){
echo "1";
}else{
echo "2";
}
?>
