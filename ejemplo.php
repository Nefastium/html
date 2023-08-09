<!DOCTYPE html>
<html>

<head>
        <title>Como poner PHP en HTML - Ejemplo Simple</title>
</head>

<body>
        <h1>prueba</h1>
        <?php
        // Ejemplo usando MySQLi

        function MOSTRARDATOS($resultados)
        {
                if ($resultados != NULL) {
                        echo "-nombre " . $resultados['nombre'] . "<br/>";
                        echo "-apellido " . $resultados['apellido'] . "<br/>";
                        echo "-telefono " . $resultados['telefono'] . "<br/>";
                        echo "-edad " . $resultados['edad'] . "<br/>";
                        echo "-altura " . $resultados['altura'] . "<br/>";
                        echo "-peso " . $resultados['peso'] . "<br/>";
                } else {
                        echo "<br/>no hay mas datos<br/>";
                }
        }

        $link = mysqli_connect("localhost", "Prueba", "");
        mysqli_select_db($link, "Prueba");
        mysqli_query($link, "SET NAMES UTF8");

        $resultados = mysqli_query($link, "SELECT * FROM alumnos");
        MOSTRARDATOS(mysqli_fetch_array($resultados));
        MOSTRARDATOS(mysqli_fetch_array($resultados));
        MOSTRARDATOS(mysqli_fetch_array($resultados));
        MOSTRARDATOS(mysqli_fetch_array($resultados));
        MOSTRARDATOS(mysqli_fetch_array($resultados));
        MOSTRARDATOS(mysqli_fetch_array($resultados));

        mysqli_free_result($resultados);
        mysqli_close($link);
        ?>
</body>

</html>