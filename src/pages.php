<?php

/*Author: Kiran Kumar Lekkala
Description: Main php program to create the user interface based on the input from the user as an xml config file
Date: 20 November 2015
*/

include 'parse.php'

    //Function: To execute various file_operations which are required by this program
    //Params: file_operation; 0 -> opening; 1 -> reading; 2 -> closing;
    //Return: Number of files opened
    function file_operation(int op){
        $num_file = 0;
        foreach (glob("$LAB/src/files/*.*") as $file) {
            $file_handle = fopen($file, "r");
            $rfile[$read++] = fread($file_handle);

            echo $rfile[$read];
        }

        $write_file = fopen("$LAB/src/vlab/main.php", "w") or die("Unable to open file!");
        $wfile[$num_file++] = fread($write_file);

        return $rfile;
    }

    //Function: To close all the file pointers which are opened by the previous function

    function file_close(file $file_pointer){

        for ($x=1;$x<=$num;$x++){
            fclose($file_pointer[$x]);
        }
    }

    //function to write text to a file pointer. The function is called
    //params: file_pointer, text variable, value

    function loop_write($file, $txt, $num, $val){

        for ($x=1;$x<=$num;$x++){
            fwrite($file,$txt);
        }

    }

    //$output is the array which consists of the text fields which is obtained from the xml schema file
    list($aim, $lang, $tabs) = xml_to_object($xml, $val);

    //$rfile is the base file pointer which contains the array of read pointers
    $rfile = file_operation(int op);
    //$number is the number of pages which will be present in the easyauthor framework wizard
    $number = $tabs[0];


    //****************************************************Generating process starts*****************************************************//

    //Getting all the read and write pointers
    $file_pointer = file_operation();
    for($x=1;$x<=num;$x++){
        loop_write($file, $txt, $num, $val);
    }



    //Tab generating,initializing and naming

    //Note: $x starts from 1 because numbering for the tabs starts from 1



    //Stich for getting the apparatus from the parser and making buttons for the user interface
    loop_write($file, $tab, $num, $val);

    loop_write($wfile, "<li><a href='#tab".$x. "' data-toggle='tab'>".$array."</a></li>", $number);
    loop_write($wfile, "<button type="button">". $val. "</button> Click to get a wedge<br><br>", 1);

    //Closing all the file pointers
    fclose($num_files);
?>


</BODY>
</HTML>
