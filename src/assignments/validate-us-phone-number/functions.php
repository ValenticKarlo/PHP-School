<?php
function is_valid_phone_number($str){
    $is_valid = preg_match('/\([0-9]\)([0-9]+\-[0-9])/', $str);
    var_dump($is_valid);
}

