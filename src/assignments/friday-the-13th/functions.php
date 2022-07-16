<?php
    function has_friday_the_13th($y, $m){
        $d = date_create("$y-$m-13");
        
        if($d->format('D')=='Fri'){return true;}
        else {return false;}

    }
    ?>

