<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 20/06/2016
 * Time: 11:28
 */

echo "<h2>Operador Ternario</h2>";

echo "- Simplifica en uso de if<br>";

echo "<code>condicion ? instrucionesTrue : InstruccionesFalse;</code><br>";

echo "- Ejemplo.<br><br><br>";

$edad1 = 15;
$edad2 = 25;

echo "Pasando $edad1 como parametro: <br>";
echo $edad1<18 ? "No puedes acceder<br>" : "Si puedes Acceder<br>";

echo "Pasando $edad2 como parametro: <br>";
echo $edad2<18 ? "No puedes acceder<br>" : "Si puedes Acceder<br>";

echo "<br>- Podriamos usar una variable par almacenar el resultado<br>";

echo "Pasando $edad1 como parametro: <br>";
$resultado = $edad1<18 ? "No puedes acceder<br>" : "Si puedes Acceder<br>";
echo  $resultado;

echo "<h2>Nota:</h2><br>";
echo "Los abtributos id y name de HTML son usados por distintos lenguales. id es usado por CSS y JS, mientras que name es usado por PHP<br>";


