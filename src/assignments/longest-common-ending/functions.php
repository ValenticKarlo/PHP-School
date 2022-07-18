<?php
function longest_common_ending($str1,$str2){
    $i = 0; 
    $new_str = "";
    $str1 = strrev($str1);
    $str2 = strrev($str2);
    $ch_arr1 = str_split($str1);
    $ch_arr2 = str_split($str2);
    while($i<strlen($str1)){
    if($ch_arr1[$i] == $ch_arr2[$i]){
        $new_str .= $ch_arr1[$i];
        $i++;
                    
        }
    else{ break; }
    }
    return strrev($new_str);
}
