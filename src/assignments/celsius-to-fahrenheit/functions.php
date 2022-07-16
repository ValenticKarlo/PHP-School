<?php
    function celsius_to_fahrenheit($celsius){
        $fahrenheit = floatval($celsius * 9/5 +32);
        return number_format($fahrenheit,2,'.');

    }
?>
