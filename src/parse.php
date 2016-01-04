<?php

/*Author: Kiran Kumar Lekkala
Description: XML parser used for parsing XML file
Date: 1 November 2015
*/

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
                array_push($data,$tag['value']);

            }
        }

        return array($data, $apparatus, $tabs);
    }
?>
