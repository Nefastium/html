<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Comentarios-->
<?php
// Este es un comentario de una sola línea

# También puedes hacer comentarios de una sola línea como este
?>
<?php
/*
Este bloque de comentarios
abarca múltiples
líneas
*/
?>
    <!--Mayusculas y Minusculas-->
<?php
ECHO "¡Hola!<br>";
echo "Bienvenido a Noticias para desarrolladores<br>";
EcHo "Disfruta de todos los artículos sin publicidad<br>";
?>
<?php
$nombre = "Maria";
echo "¡Hola! Mi nombre es " . $nombre . "<br>";
echo "¡Hola! Mi nombre es " . $NOMBRE . "<br>";
echo "¡Hola! Mi nombre es " . $NomBre . "<br>";
?>

    <!--Variables-->
<?php
// Asigna el valor "¡Hola!" a la variable "saludo"
$saludo = "¡Hola!";
// Asigna el valor 8 a la variable "mes"
$mes = 8;
// Asigna el valor 2019 a la variable "ano"
$ano = 2019;
?>
    <!--Tipos de Datos-->
<?php
//String
$x = "¡Hola!";
$y = '¡Hola!';

//Int
$x = 5;

//Float
$x = 5.01;

//Booleanos
$x = true; //Verdadero
$y = false; //Falso

//Arreglos
$colores = array("Magenta", "Amarillo", "Cian");

//Null
// Asigna el valor "¡Hola!" a saludo
$saludo = "¡Hola!";
// Vacía el valor de saludo configurándolo como nulo
$saludo = null;
?>


</body>
</html>