<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 20/06/2016
 * Time: 11:28
 */

echo "<h2>Ciclos While y Do While</h2>";

echo "- En PHP estos ciclos tienen la misma sintaxis que en Java.<br>";


echo "- Ejemplo.<br><br><br>";


$contador = 1;

while ($contador <= 10) {
    echo "La variable vale $contador." . "<br>";
    $contador++;
}


echo "<br><br>- Imprimanos la tabla del 9 hasta el 9 * 100.<br>";

$numero = 0;

do {
    echo "9 x $numero = " . 9 * $numero . "<br>";
    $numero++;
} while ($numero <= 100);


echo "<br><br>- Puedo usar <code>continue</code> para pasar el resto de la ejecución actual  y <code>break</code> para terminar definitivamente el ciclo<br>";


echo "<br><br>- Vamos a dividir 100 entre los numeros 10 hasta -10. evitando el error de dividir por cero<br>";

$var = 10;

while ($var > -10) {
    if (!$var == 0) {
        echo "100 / $var = " . 100 / $var . ".<br>";
    }
    $var--;
}


