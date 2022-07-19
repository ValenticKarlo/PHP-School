<?php

require __DIR__ . '/classes.php';

?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP School</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body>
    <?php
    $animal = new Animal('Tiger','rawr');
    $animal->set_color("");
    echo 'Color: ' . $animal->get_color();
    echo '<br/>';
    $animal->set_color('Orange');
    echo 'Color: ' . $animal->get_color();
    echo '<br/>';
    echo 'Weight unit: ';
    Attributes::get_weight_unit();
    ?>
    

</body>

</html>