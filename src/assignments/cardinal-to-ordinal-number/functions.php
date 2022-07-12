<?php
    function cardinal_to_ordinal ($num) {
        $num = intval($num);
        if($num%100 == 11 || $num%100 == 12 || $num%100 == 13){
            $numstr = strval($num);
            $numstr .= "th"; 
            return $numstr;
        }
        elseif($num%10 == 1 && ($num > 20 || $num < 10)){
            $numstr = strval($num);
            $numstr .= "st"; 
            return $numstr;
        }
        elseif($num%10 == 2 &&  ($num > 20 || $num < 10)){
            $numstr = strval($num);
            $numstr .= "nd"; 
            return $numstr;
        }
        elseif($num%10 == 3 && ($num > 20 || $num < 10)){
            $numstr = strval($num);
            $numstr .= "rd"; 
            return $numstr;
        }
        else{
            $numstr = strval($num);
            $numstr .= "th"; 
            return $numstr;
        }
    }
?>