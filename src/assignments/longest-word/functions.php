<?php
    function longest_word($str){
        $long_word = "";
        $pieces = explode(" ", $str);
        foreach($pieces as $piece){
            if(strlen($long_word)<strlen($piece)){$long_word=$piece;}  
        }
        return $long_word;
    }

