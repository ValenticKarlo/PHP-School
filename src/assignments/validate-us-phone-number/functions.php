<?php
function is_valid_phone_number($str){

    $is_valid = preg_match('/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/', $str);
    // $is_valid = preg_match('/\([0-9]\)([0-9]+\-[0-9])/', $str);
    if($is_valid === 1){return true;}
    else{return false;}
}
