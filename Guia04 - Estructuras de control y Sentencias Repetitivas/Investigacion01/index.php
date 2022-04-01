<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices Unidimensionales y Bidimensionales</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Matrices Unidimensionales</h1>
    <?php
    //Matrices unidimensionales (Arreglos)
    $nombres = array();
    $nombres[0] = "Andrea";
    $nombres[1] = "Christian";
    $nombres[2] = "Gisselle";
    $nombres[3] = "Rodrigo";
    $nombres[4] = "Elias";

    echo "<section>";
    echo "<div class=\"Array\">";
    foreach ($nombres as $key => $value) {
        echo "<div class=\"segmento\">";
        echo "<p>$value</p>";
        echo '</div>';
    }
    echo '</div>';
    echo "</section>";

    //Matrices bidimensionales

    echo '<h1>Matrices Bidimensionales</h1>';

    $compañeros = array();
    $compañeros[0][0] = "Andrea";
    $compañeros[1][0] = "Christian";
    $compañeros[2][0] = "Gisselle";
    $compañeros[3][0] = "Rodrigo";
    $compañeros[4][0] = "Elias";
    $compañeros[0][1] = "Ardon";
    $compañeros[1][1] = "Henriquez";
    $compañeros[2][1] = "Rivas";
    $compañeros[3][1] = "Apellido X";
    $compañeros[4][1] = "Apellido Y";
    $compañeros[0][2] = "FV180290";
    $compañeros[1][2] = "MR171225";
    $compañeros[2][2] = "MM160724";
    $compañeros[3][2] = "HS170505";
    $compañeros[4][2] = "VC190544";

    echo "<section>";
    echo "<table>";
    for ($i = 0; $i < 5; $i++) {
        echo "\t<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo '<th>' . $compañeros[$i][$j] . '</th>';
        }
        echo "\t</tr>";
    }
    echo "</table>";
    echo "</section>";
    ?>
    <footer>
        <p>Copyright Universidad Don Bosco 2021</p>
    </footer>
</body>

</html>