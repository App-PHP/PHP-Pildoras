<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 05/07/2016
 * Time: 14:15
 */

echo "<h2>Funciones, parametros por valor y por referencia</h2>";

echo "- En los ejemplos anteriores haciamos el paso de parametoss por valor. Incluso cuando usamos una variable, lo que pasa es su valor, se crea un nuevo campo en memoria para el valor dentro de la funcion<br>";

echo "- Si queremos que el valor sea el mismo dentro y fuera de la función, se debe anteponer <code>&</code> al parametro en la declaración de la función.<br>";

echo "- La variable como parametro conserva los cambios realizados dentro de la función<br>";

echo "- Ejemplo.<br><br><br>";

$valor1 = 125;
$valor2 = 10;

//usando el & antes del parametro
function sumarPorReferencia(&$valor1, $valor2)
{
    return $valor1 *= $valor2;
}

echo "<br>Valor de la variable antes de llamar la funcion: ". $valor1;
sumarPorReferencia($valor1, $valor2);
echo "<br>Valor de la variable despues de llamar la funcion: ". $valor1;