<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 10/06/2016
 * Time: 15:08
 */
echo "<h2>Ambito de las Variables</h2>";
echo "- En PHP Existen las variables locales, globales y superglobales<br>";
echo "- Por defecto las variables locales no se pueden usar dentro de una funcion, ni las creadas dentro de la función se pueden usar afuera<br>";

echo "- Para que una variable dentro de una funcion tome el valor de la variable con el mismo nombre de afuera de la función, se debe anteponer la palabra <code>global</code>.<br>";

echo "- Ejemplo.<br><br><br>";


$nombre = "Hernan";
function dameNombre(){
   $nombre = "Matias";
}
dameNombre();
print ($nombre."<br>"); //la salida es "Hernan"


//***********************************************************//

$nombre2 = "Hernán V.";
function dameNombre2(){
    global $nombre2; //tiene que estár en linea aparte
    $nombre2 = "Matias V.";
    print ($nombre2 . "<br>"); //la salida es "Matias V."
}
dameNombre2();
print ($nombre2 . "<br>"); //la salida es "Matias V."