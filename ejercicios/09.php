<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
    <?php
    $array1 [0]="Estados Unidos";
    $array1 [1]="España";
    $array1 [2]="Inglaterra";
    $array1 [3]="Alemania";

    echo "PAISES";
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