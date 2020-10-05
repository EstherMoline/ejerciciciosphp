<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
    <?php
    $array1 [0]="Michael Jordan";
    $array1 [4]="Kobe Bryant";
    $array1 [18]="Shaquille O'neal";
    $array1 [57]="Lebron James";

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