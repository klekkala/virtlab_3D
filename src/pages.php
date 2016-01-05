<?php

/*Author: Kiran Kumar Lekkala
Description: Main php program to create the user interface based on the input from the user as an xml config file
Date: 20 November 2015
 */

include 'parse.php';

//Function: To execute various file_operations which are required by this program
//Params: file_operation; 0 -> opening; 1 -> reading; 2 -> closing;
//Return: Number of files opened
function file_open(){
    //$file_pointer = array();
    $read_file = array();
    $num_file = 0;
    foreach (glob("/var/www/html/src/files/files/*.*") as $file) {
        $read_file[$num_file++] = fread($file, 3200);
        //echo $read_file[$num_file];
        echo $file;
    }

    $write_file = fopen("/var/www/html/src/files/vlab/main.php", "w") or die("Unable to open file!");

    return array($read_file, $write_file);
}



//Function: To close all the file pointers which are opened by the previous function

function file_close(file $file_pointer){

    for ($x=1;$x<=$num;$x++){
        fclose($file_pointer[$x]);
    }
}

//function to write text to a file pointer. The function is called
//params: file_pointer, text variable, value

function loop_write($file, $txt, $num){

    for ($x=1;$x<=$num;$x++){
        fwrite($file,$txt);
    }

}

    $num_file = 0;
    $read_file = array();
    $write_file = fopen("/var/www/html/src/vlab/main.php", "w") or die("Unable to open file!");
    $rfile = fopen("/var/www/html/src/files/exp-1.xml", "r") or die("Unable to open file!");

    $rfile1 = fopen("/var/www/html/src/files/stitch-1.txt", "r") or die("Unable to open file!");
    $rfile2 = fopen("/var/www/html/src/files/stitch-2.txt", "r") or die("Unable to open file!");
    $rfile3 = fopen("/var/www/html/src/files/stitch-3.txt", "r") or die("Unable to open file!");
    $rfile4 = fopen("/var/www/html/src/files/stitch-4.txt", "r") or die("Unable to open file!");
    $rfile5 = fopen("/var/www/html/src/files/stitch-5.txt", "r") or die("Unable to open file!");
     $rfile6 = fopen("/var/www/html/src/files/stitch-6.txt", "r") or die("Unable to open file!");
      $rfile7 = fopen("/var/www/html/src/files/stitch-7.txt", "r") or die("Unable to open file!");


    //file pointers reading or writing
    $read_file[$num_file++] = fread($rfile,filesize("/var/www/html/src/files/exp-1.xml"));
    $read_file[$num_file++] = fread($rfile1,filesize("/var/www/html/src/files/stitch-1.txt"));
    $read_file[$num_file++] = fread($rfile2,filesize("/var/www/html/src/files/stitch-2.txt"));
    $read_file[$num_file++] = fread($rfile3,filesize("/var/www/html/src/files/stitch-3.txt"));
    $read_file[$num_file++] = fread($rfile4,filesize("/var/www/html/src/files/stitch-4.txt"));
    $read_file[$num_file++] = fread($rfile5,filesize("/var/www/html/src/files/stitch-5.txt"));

$read_file[$num_file++] = fread($rfile6,filesize("/var/www/html/src/files/stitch-6.txt"));
$read_file[$num_file++] = fread($rfile7,filesize("/var/www/html/src/files/stitch-7.txt"));

$x=1;
$y=0;
$z=0;
$val=1;
//Getting all the file_pointers, read and write pointers
//list($read_file, $write_file) = file_open();

//$output is the array which consists of the text fields which is obtained from the xml schema file
list($data, $apparatus, $tabs) = xml_to_object($read_file[0], $val);

//$number is the number of pages which will be present in the easyauthor framework wizard
$lang = $data[$z++];

//****************************************************Generating process starts*****************************************************//


//echo $read_file[$x];
fwrite($write_file, $read_file[$x++]."$lang".$read_file[$x++]);

for ($y=1;$y<=$tabs[0];$y++){
    fwrite($write_file, "<li><a href='#tab".$y. "' data-toggle='tab'>".$tabs[$y]."</a></li>");
}

fwrite($write_file, $read_file[$x++]);
loop_write($write_file, $read_file[$x++], 1);
fwrite($write_file, $read_file[$x++]);

for ($y=1;$y<=$apparatus[0]-1;$y++){
    fwrite($write_file, "<button type='button'>". $apparatus[$y]. "</button> Click to get a ".$apparatus[$y]."<br><br>");
}

fwrite($write_file, $read_file[$x++]."<img src=".$data[$z++]." alt='Finding g' style='width:600px;height:350px;'>".$read_file[$x++]);


//Stich for getting the apparatus from the parser and making buttons for the user interface

//Stiching the number of buttons given by the xml file

//Closing all the file pointers
//fclose($file_pointer);
?>


</BODY>
</HTML>
