<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
    <?php
    $array1= ["jug.1","jug.2","jug.3","jug.4"];
    
    echo "NOMBRE JUGADORES";
    echo "<ul>";
    foreach ($array1 as $element) {
        echo "<li>" .$element."</li>";
    
    }
    echo "<br>";
    print_r($array1);
    echo "</ul>";



    ?>
</body>
</html>
