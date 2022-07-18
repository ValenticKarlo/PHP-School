<?php

use phpDocumentor\Reflection\PseudoTypes\False_;

function is_valid_email($str){
    $is_valid = preg_match('/^[a-z]+@[a-z]+\.[a-z]/', $str);
    if($is_valid === 1){
        return true;
    }
    else {return false;}
}

