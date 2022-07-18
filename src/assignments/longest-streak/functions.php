<?php
    function longest_streak($dates){
        $streak = 1;
        $count = 1;
        $last_date="";
        $ldate = date_create($last_date);
        if(!empty($dates)){
            foreach($dates as $date){
                
                $date_format = date_create($date);
                $pos_diff = $ldate->diff($date_format)->format("%r%a");
                if($pos_diff == 1){
                    $count ++; 
                    }
                else{
                    if($streak<$count){
                        $streak = $count;
                    }
                 $count = 1;   
                }
                if ($count>$streak){$streak = $count;}
                $ldate = $date_format;

            }
        }else{$streak = 0;}
        
        return $streak;
    }


