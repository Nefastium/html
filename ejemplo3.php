<!DOCTYPE html>
<html>
        <head>
                <title>Como poner PHP en HTML - Ejemplo de fecha</title>
        </head>
        <body>
            <div> Este es un mensaje HTML puro .</div>
            <div> A continuación, mostraremos la fecha y el día de hoy por PHP!</div>
            <div>
            <?php
                echo 'La fecha de hoy es <b>' . date('Y/m/d') . '</b> y es un <b>'.date('l').'</b> Hoy!';
            ?>
            </div>
            <div> Nuevamente, este es contenido HTML estático .</div>
        </body>
</html>