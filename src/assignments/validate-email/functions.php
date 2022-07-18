<?php
function is_valid_mail($str){
    //$arr = explode("@",$str);
    preg_match('@^(?:@)?([^])+@i', $str , $matches);
    if ($matches == [] || $matches[0][1] != "@"|| $matches[0][1]!= ".") {return false;}
    print_r($matches);
    echo '<br/>';

}

