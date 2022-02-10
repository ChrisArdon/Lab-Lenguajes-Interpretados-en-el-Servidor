<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion personal</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile">
    <link rel="stylesheet" href="css/tables.css">
    <script src="js/modernizr.custom.lis.js"></script>
</head>

<body>
    <header>
        <h1>Informacion Personal</h1>
    </header>
    <section>
        <article>
            <div id="info">
                <table id="hor-zebra" summary="Datos Personales">
                    <caption>Informacion de formulario</caption>
                    <thead>
                        <tr class="thead">
                            <th scope="col">Campo</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nombre = "Christian Rodrigo Ardon Rivas";
                        $lugarNacimiento = "San Salvador";
                        $pais = "El Salvador";
                        $edad = 21;
                        $carnet = "AR160127";

                        echo "\t\t<td>\nNombre Completo\n</td>\n";
                        echo "\t\t<td>\n" . $nombre . "\n</td>\n";
                        echo "\t</tr>\n";

                        echo "\t<tr>\n";
                        echo "\t\t<td>\nLugar de nacimiento\n</td>\n";
                        echo "\t\t<td>\n" . $lugarNacimiento . "\n</td>\n";
                        echo "\t</tr>\n";

                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nEdad\n</td>\n";
                        echo "\t\t<td>\n" . $edad . "\n</td>\n";
                        echo "\t</tr>\n";

                        echo "\t\t<td>\nCarnet\n</td>";
                        echo "\t\t<td>\n" . $carnet . "\n</td>\n";
                        echo "\t</tr>\n";
                        ?>
                    </tbody>
                </table>
            </div>
        </article>
    </section>
</body>

</html>