<!DOCTYPE html>
<html>
        <head>
                <title>Como poner PHP en HTML - Ejemplo de fecha</title>
        </head>
        <body>
            <div> Este es un mensaje HTML puro .</div>
            <div> A continuación, mostraremos la fecha y el día de hoy por PHP!</div>
            <div>
                La fecha de hoy es <b><?php echo date('Y/m/d') ?></b> y es un <b><?php echo date("l")?></b> Hoy!
            </div>
            <div> Nuevamente, este es contenido HTML estático .</div>
        </body>
</html>