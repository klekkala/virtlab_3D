<?php

/*Author: Kiran Kumar Lekkala
Description: Main php program to create the user interface based on the input from the user as an xml config file
Date: 20 November 2015
*/

include 'parse.php'

    //Function: To execute various file_operations which are required by this program
    //Params: file_operation; 0 -> opening; 1 -> reading; 2 -> closing;
    //Return: Number of files opened
    function file_open(int op){
        $num_file = 0;
        foreach (glob("$LAB/src/files/*.*") as $file) {
            $file_pointer[$num_file++] = fopen($file, "r");
            //echo $rfile[$read];
            $read_file[$num_file++] = fread($file_pointer, $file);
        }
		$file_pointer[$num_file++] = fopen()
        $write_file = fopen("$LAB/src/vlab/main.php", "w") or die("Unable to open file!");

        return array($file_pointer, $read_file, $write_file, $num_file-1);
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

    //Getting all the file_pointers, read and write pointers
    list($file_pointer, $read_file, $write_file, $num_file) = file_open();

    //$output is the array which consists of the text fields which is obtained from the xml schema file
    list($aim, $lang, $tabs) = xml_to_object($read_file[0], $val);

    //$rfile is the base file pointer which contains the array of read pointers
    $rfile = file_operation(int op);
    //$number is the number of pages which will be present in the easyauthor framework wizard
    $number = $tabs[0];


    //****************************************************Generating process starts*****************************************************//



   	fwrite($write_file, $read_file[$x++]);
	fwrite(language);
	fwrite($write_file, $read_file[$x++]);
	loop_write($write_file, "<li><a href='#tab".$x. "' data-toggle='tab'>".$array."</a></li>", $number);
	fwrite($write_file, $read_file[$x++]);
	loopwrite(4);
	fwrite($write_file, $read_file[$x++]);
	loop_write($write_file, "<button type="button">". $val. "</button> Click to get a wedge<br><br>", 1);
	fwrite($write_file, $read_file[$x++]);
	fwrite(experiment_jpg);
	fwrite($write_file, $read_file[$x++]);


    //Stich for getting the apparatus from the parser and making buttons for the user interface
    loop_write($file, $tab, $num, $val);

    //Stiching the number of buttons given by the xml file

    //Closing all the file pointers
    fclose($file_pointer);
?>


</BODY>
</HTML>
