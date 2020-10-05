<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
    <?php
    define('SIZE', 124);
    
    $contador = 0;
    echo "Los divisores de " , SIZE;
    for ($number = 1; $number <= SIZE; $number++) {
        if (SIZE % $number == 0){
            $contador++;
            echo "<br>".$number;
        }
    }
            
        if ($contador == 2) {
            echo "es un numero primo";
        }
    
    ?>
</body>
</html>
