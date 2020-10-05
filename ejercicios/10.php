<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
    <?php
    $array1 = array (
    'base'=>"Michael Jordan",
    'pivot'=>"Kobe Bryant",
    'escolta'=>"Shaquille O'neal",
    'ala-pivot'=>"Lebron James");

    echo "NOMBRE JUGADORES";
    foreach ($array1 as $element) {
        echo "<br>".$element;
    
    }
    echo "<br>";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    ?>
</body>
</html>