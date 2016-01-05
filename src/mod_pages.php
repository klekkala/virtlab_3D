<?php

$x=0;
$file_arr = array();
$dir = "/var/www/html/src/files/*";
foreach(glob($dir) as $file) {
    $file_arr[$x++] = nl2br(file_get_contents($file));
}
echo $file_arr[1];
?>