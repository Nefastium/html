<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Conectando, seleccionando la base de datos
    $link = mysqli_connect('mysql_host', 'mysql_user', 'mysql_password', 'my_database');
    if (!$link) {
        die('No se pudo conectar: ' . mysqli_connect_error());
    }
    echo 'Connected successfully';

    // Realizar una consulta MySQL
    $query = 'SELECT * FROM my_table';
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Consulta fallida: ' . mysqli_error($link));
    }

    // Imprimir los resultados en HTMl
    echo "<table>\n";
    while ($line = mysqli_fetch_assoc($result)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>" . htmlspecialchars($col_value) . "</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";

    // Liberar resultados
    mysqli_free_result($result);

    // Cerrar la conexión
    mysqli_close($link);
    ?>

</body>

</html>