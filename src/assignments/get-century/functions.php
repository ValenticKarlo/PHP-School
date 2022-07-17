<?php
    function get_century($year){
         $century = ceil($year/100);
         require "/var/www/src/assignments/cardinal-to-ordinal-number/functions.php";
         $century = cardinal_to_ordinal($century);
         return 'Year ' . $year . ' belong to the ' . $century .' century.';
    }
?>