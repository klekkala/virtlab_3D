<?php
$connection = mysql_connect('localhost', 'root', 'qwertyuiop')
or die("Opps some thing went wrong");
$db = mysql_select_db('visual', $connection)
or die("Opps some thing went wrong");

if($value == 'step')
$name = $_POST['firstname'];

else if($value == 'action')
$password = $_POST['pass'];

else if($value == 'objective')
$encrypted = md5($password);

else if($value == 'const')
$name = $_POST['firstname'];

else if($value == 'object')
$name = $_POST['firstname'];

else if($value == 'animation')
$name = $_POST['firstname'];

$query=mysql_query("INSERT INTO class(`name`,`password`)
VALUES('$name','$encrypted')");


if(mysql_affected_rows()>0){
echo "1";
}else{
echo "2";
}
?>
