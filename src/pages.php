<HTML>
<HEAD>
<TITLE> writing a file </TITLE>
</HEAD>

<BODY>


<?php


//**********************************************XML parser********************************************
//This XML parser works by pushing the retrieved nodes into a stack and later retrieving them//
class XmlElement {
    var $name;      //Name of the attribute
    var $attributes;//List of subattributes
    var $content;   //Content of the attributes
    var $children;  //Number of children
};


//Function which converts xml variable to element-object format//
//$xml is the variable which is read from an xml file//
//$val can be one of the 4 variables in the class types//
//$tabs is the array which consists of the names and appending it for every name attribute//
function xml_to_object($xml, $val) {


    $steps = array();
    $apparatus =  array ();
    $meta_data = array();



    $parser = xml_parser_create();
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parse_into_struct($parser, $xml, $tags);
    xml_parser_free($parser);

    //Initializing counter for parsing purposes
    $counter = 0;
    $check = 0;

    foreach ($tags as $tag) {

        if ($tag['type'] == "complete" || $tag['type'] == "open"){
            if($tag['tag']=='step' || $tag['tag']=='num_steps'){
                array_push($tabs,$tag['value']);

            }
            else  if($tag['tag']=='num_app'){

                array_push($apparatus,$tag['value']);
                $check = $tag['value'];

            }

            else if(check != 0){
                array_push($apparatus,$tag['tag']);
                $counter+=1;
                if($counter==$check){
                    $check = 0;
                }
            }
            else if($tag['tag'] == 'aim' || $tag['tag'] == 'src'){
                array_push($meta_data,$tag['value']);

            }
        }

        return array($aim, $lang, $tabs);
    }



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

        return $num_file;
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

    $num_files = file_operation(int op);
    //$number is the number of pages which will be present in the easyauthor framework wizard
    $number = $tabs[0];


    //*********************************Generating process starts*******************************//

    for($x=1;$x<=num;$x++){
        loop_write($file, $txt, $num, $val)
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
