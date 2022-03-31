<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de monedas</title>
    <link rel="stylesheet" href="css/monedas.css" />
</head>

<body>
    <header>
        <h2>Tabla de conversion de colones a dolares</h2>
        <hr>
    </header>
    <section>
        <article>
            <?php
            define("EQUIV", "8.75");
            $colones = 1.00;
            $tabla  = "<table>\n<thead>\n";
            $tabla .= "<th>Colones</th>";
            $tabla .= "<th>Dólares</th>";
            $tabla .= "</thead>\n<tbody>\n";
            while ($colones <= 300) {
                $tabla .= "<tr>\n<td>&cent; ";
                $tabla .= number_format($colones, 2, '.', ',') . "</td><td>\$ ";
                $tabla .= number_format($colones / EQUIV, 2, '.', ','); //Realizamos la conversion
                $colones += 0.25;
                $tabla .= "</td>\n</tr>\n";
            } //fin del bucle
            $tabla .= "</tbody>\n</table>\n"; //cerramos la tabla
            echo $tabla; //Imprimimos la tabla con todas las columnas generadas 
            ?>
        </article>
    </section>
    <script src="js/modernizr.custom.lis.js"></script>
</body>

</html>