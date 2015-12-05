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


    $tabs = array();
    $lang =  array ();
    $aim = array();



    $parser = xml_parser_create();
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parse_into_struct($parser, $xml, $tags);
    xml_parser_free($parser);

    $i = 0;
    foreach ($tags as $tag) {

        if ($tag['type'] == "complete" || $tag['type'] == "open")
            if($tag['tag']=='step'){
                array_push($tabs,$tag['value']);

            }
            else  if($tag['tag']=='num'){
                array_push($tabs,$tag['value']);

            }
            else if($tag['tag'] == 'aim'){
                array_push($aim,$tag['value']);

                }
                else{
                    array_push($lang,$tag['tag']);
                    $i++;
                }
        }

    return array($aim, $lang, $tabs);
       }
        //file pointers initialized and pointed
    $read=0;
    $write=0;
       function file_operation(int op){
       foreach (glob("files/*.txt") as $file) {
        $file_handle = fopen($file, "r");
        if(op==0){
           $rfile[$read++] = fread($file_handle); 
        }
        else{
        $wfile[$write++] = fread($file_handle);
    }
        echo $rfile[$read];
        fclose($file_handle);
    }
    $xml = fopen("/var/www/html/config/telugu/exp-1.xml", "r") or die("Unable to open file!");
    fclose($xml);
       }


    //$val is the variable which consists of the attribute in the xml file. You get the data which is enclosed in the attribute
    $val = "name";
    $language = "ta";
    //$output is the array which consists of the text fields which is obtained from the xml schema file
    list($aim, $lang, $tabs) = xml_to_object($xml, $val);


    //$number is the number of pages which will be present in the easyauthor framework wizard
    $number = $tabs[0];

    //*********************************Generating process starts*******************************//

    //Initializing HTML and scripts
    fwrite($wfile, $txt1);

    //Specifing the language

    $txt = "<?php" . "$"."lang = ". "'$language'"."?>";
    fwrite($wfile, $txt);


    fwrite($wfile, $txt2);

    //Tab generating,initializing and naming

    //Note: $x starts from 1 because numbering for the tabs starts from 1
    for ($x = 1; $x <= $number; $x++) {
        $word = $tabs[$x];
        $txt = "<li><a href='#tab$x' data-toggle='tab'>$word</a></li>";
        fwrite($wfile, $txt);
    }

    fwrite($wfile, $txt3);


    for ($x = 1; $x <= $number; $x++){
        fwrite($wfile, $txt4);
    }

    fwrite($wfile, $txt5);
?>


</BODY>
</HTML>
