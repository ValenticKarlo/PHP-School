<?php
function is_valid_hex_code($str){
    $is_valid = preg_match('/#([a-f]|[A-F]|[0-9]){3}(([a-f]|[A-F]|[0-9]){3})?\b/', $str);
    if($is_valid === 1){
        return true;
    }
    else {return false;}
}