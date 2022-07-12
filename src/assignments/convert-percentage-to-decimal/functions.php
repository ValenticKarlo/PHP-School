<?php
    function convert_to_decimal($str){
        $num = floatval(str_replace("%","",$str));
        return $num/100;
    }

?>