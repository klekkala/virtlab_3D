<html>
<head>
<title> Parse </title>
</head>
<body>

<?php
$xml=simplexml_load_file("/var/www/html/config/hindi.xml") or die("Error: Cannot create object");
$num = $xml->tabs->number;
echo $num;
?>


</body>
<html>
