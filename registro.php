<!DOCTYPE html>
<html>
<head>
    <title>Registro de Datos Personales</title>
</head>
<body>
    <h2>Registro de Datos Personales</h2>
    <form action="insertar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="altura">Altura (cm):</label>
        <input type="number" step="0.01" name="altura" required><br>

        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.01" name="peso" required><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
