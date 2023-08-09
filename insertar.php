<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $link = mysqli_connect('localhost', 'stefano', 'Elmaspapu1!', 'datos_personales');
    if (!$link) {
        die('No se pudo conectar: ' . mysqli_connect_error());
    }

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $query = "INSERT INTO personas (nombre, apellidos, direccion, telefono, edad, altura, peso)
    VALUES ('$nombre', '$apellidos', '$direccion', '$telefono', $edad, $altura, $peso)";

    if (mysqli_query($link, $query)) {
        echo "Registro insertado correctamente.";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($link);
    }

    mysqli_close($link);
    ?>

</body>

</html>