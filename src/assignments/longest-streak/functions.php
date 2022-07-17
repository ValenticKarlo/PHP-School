<?php
    function longest_streak($dates){
        $streak = 0;
        $last_date="";
        
        $ldate = date_create($last_date);

        foreach($dates as $date){
            $ldate->modify('+1 day');
            $date_format = date_create($date);
            if($date_format === $ldate){
                $streak += 1;
            }
            echo $ldate  . '||' . $date_format;
            echo '<br \n>';
            $ldate = $date_format;

        }
        return $streak;
    }


