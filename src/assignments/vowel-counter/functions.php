<?php
function count_vowels($str){
    $values = str_split($str);
    $count = 0;
    $vowels = array("a","e","i","o","u");
    foreach($values as $value){
        foreach($vowels as $vowel){
            if($value == $vowel){$count++;}
        }
        
    }
    return $count;
}

// kraca verzija:
// function count_vowels($str){
//     $values = str_split($str);
//     $count = 0;
//     $vowels = array("a","e","i","o","u");
//     foreach($values as $value){
//         if ( in_array( $value, $vowels ) ) {
//             $count++;
//         }
//     }
//     return $count;
// }

?>
