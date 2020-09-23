<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<head>
    <title>Tabla de multiplicar 8
        
    </title>
</head>
<body >

<?php
for($number=1;$number<=10;$number++)
{
echo "<table border=2>";

for($number2=8;$number2<=8;$number2++)
{
$result=$number*$number2;
echo "<tr align=center><td>".$number."</td><td> X </td><td>".$number2."</td><td> = </td><td>".$result."</td></tr>";
}
echo "</table>";
}
?>
</body>
</html>