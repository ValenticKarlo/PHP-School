<?php
    function is_christmas($data){
        $dateTime = date_create($data);
        if ($dateTime->format('d') == '25' && $dateTime->format('m')){return true;}
        else{return false;}
    } 

?>


