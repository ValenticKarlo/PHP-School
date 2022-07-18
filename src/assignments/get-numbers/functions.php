<?php
    function get_numbers($values){
        $array = [];
        foreach($values as $value){
            if(is_int($value) === true || is_float($value) === true ){
                array_push($array, $value);
            }
        }
        return $array;
    }
?>


