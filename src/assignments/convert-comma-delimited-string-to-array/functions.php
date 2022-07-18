<?php
function to_array($str){
    $arr =array();
    if ($str != ""){
        $arr = explode(",",$str);
        return $arr;
    }
    else{return $arr;}
}

// kraca verzija:
// function to_array($str){
//     return $str != '' ? explode(",",$str) : [];
// }

?>
