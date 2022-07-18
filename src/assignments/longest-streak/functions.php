<?php
    function longest_streak($dates){
        $streak = 0;
        $last_date="";
        
        $ldate = date_create($last_date);
        foreach($dates as $date){
            $ldate->modify('+1 day');
            $date_format = date_create($date);
            if($date_format->format('Y') == $ldate->format('Y')&&
               $date_format->format('m') == $ldate->format('m')&&
               $date_format->format('d') == $ldate->format('d')){
                $streak ++;
            }
            $ldate = $date_format;

        }
        return $streak;
    }


