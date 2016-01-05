<?php

 $wfile = fopen("/var/www/html/src/vlab/main.php", "w") or die("Unable to open file!");

foreach (glob("/var/www/html/src/files/*.*") as $file) {
    foreach(file($file) as $line) {
        fwrite($wfile, $line);
    }
}
?>