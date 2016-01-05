<?php

include 'parse.php';

 $rfile = fopen("/var/www/html/src/files/exp-1.xml", "r") or die("Unable to open file!");
 $xml = fread($rfile,filesize("/var/www/html/src/files/exp-1.xml"));

 $val = 2;
 list($data, $apparatus, $tabs) = xml_to_object($xml, $val);
?>