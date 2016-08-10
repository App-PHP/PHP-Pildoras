<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 20/06/2016
 * Time: 11:28
 */

echo "<h2>Switch Case</h2>";

echo "- La sentencia switch es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.<br>";

echo "<code>switch (condicion){case valor1: acciones; break; case valor2....}</code><br>";

echo "- Ejemplo.<br><br><br>";

$nombre = "Matias";

switch ($nombre) {
    case "Eliana":
        echo "Hola Eliana";
        break;
    case "Matias":
        echo "Hola Mati";
        break;
    case "Hernan":
        echo "Hola Hernan";
        break;
    default:
        echo "No Autorizado";

}
echo "<br><br><br>";

echo "<br>- Si queremos evaluar dos condiciones simultameamente o una que incluya rangos de valores lo hacemos así.<br>";

echo "- Ejemplo.<br><br><br>";
$edad = 15;
$nombre2 = "Eliana";

switch (true) {
    case $edad < 18 && $nombre2 = "Eliana":
        echo "Eliana menor de edad";
        break;
    case $edad < 35 && $nombre2 = "Eliana":
        echo "Eliana joven";
        break;
    case $edad < 3 && $nombre2 = "Matias":
        echo "Mati bebe";
        break;
    case $edad < 18 && $nombre2 = "Matias":
        echo "Mati mejor de edad";
        break;
    case $edad < 35 && $nombre2 = "Matias":
        echo "Mati joven";
        break;
    default:
        echo "otro";
}

echo "<br>- Es fundamental poner el <code>switch (true) {...}</code> para iniciar la linea.<br>";
echo "<br><br><br>";

echo "<br>- Para usar una acción para varios casos, se procede así:<br>";
echo "- Ejemplo.<br><br><br>";
$beer = "tuborg";
switch ($beer) {
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Buena elección';
        break;
    default;
        echo 'Por favor haga una nueva selección...';
        break;
}