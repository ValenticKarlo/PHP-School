<?php
    function is_christmas($data){
        $dateTime = date_create($data);
        if ($dateTime->format('d') == '25' && $dateTime->format('m') == '12'){return true;}
        else{return false;}
    } 

?>


