<!DOCTYPE html>
<html>
        <head>
                <title>Como poner PHP en HTML - Foreach Ejemplo</title>
        </head>
        <body>
            <?php
                $empleados = array('Antonella', 'Camila', 'Dylan', 'Alexis', 'Sofia','Lucas','Santiago','Melany','Elias','Stefano', 'Leonel', 'Lautaro', 'Octavio');
            ?>
            <h1>Listado de Empleados</h1>
            <ul>
                <?php foreach ($empleados as $empleado) { ?>
                <li><?php echo $empleado ?></li>
                <?php } ?>
            </ul>
        </body>
</html>