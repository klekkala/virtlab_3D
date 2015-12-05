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
    $xml = fopen("../config/telugu/exp-1.xml", "r") or die("Unable to open file!");
    fclose($xml);
       }