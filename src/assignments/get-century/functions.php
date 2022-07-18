<?php

// require "/var/www/src/assignments/cardinal-to-ordinal-number/functions.php";
require __DIR__ . "/../cardinal-to-ordinal-number/functions.php";

function get_century($year){
    $century = ceil($year/100);
    $century = cardinal_to_ordinal($century);
    return $century .' century.';
}
