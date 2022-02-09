<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejemplo PHP - Operadores logicos</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $a = 8;
    $b = 3;
    $c = 3;
    echo ($a == $b) && ($c > $b), "<br>"; //false
    echo ($a == $b) || ($b == $c), "<br>"; //true
    echo !($b <= $c), "<br>"; //false
    ?>
</body>

</html>