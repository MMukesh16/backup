<?php
                             // JSON ENCODE "json_encode"
    
    // $fruits = array("Apple","Orange","Pomegranate","Pineapple");                         
    // echo json_encode($fruits);        

                            // JSON DECODE "json_decode"
    
    $jsonobj = '{"peter":"35", "john":"52", "jack":"37"}';
    var_dump(json_decode($jsonobj));
?>
