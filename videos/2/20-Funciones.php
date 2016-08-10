<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 05/07/2016
 * Time: 14:15
 */

echo "<h2>Funciones</h2>";

echo "- PHP maneja dos tipos de funciones, las predefinidas y las credas por el usuario<br>";

echo "- Para decrarar funciones en PHP se usa la palabra reservada <code>function</code>. NO es necesario especificar el tipo de reporto.<br>";

echo "- PHP soporta paso de parametros por defecto<br>";

echo "- Ejemplo.<br><br><br>";

function sumar($valor1, $valor2)
{
    return $valor1 + $valor2;
}

$resultado = sumar(10, 25);
echo "El resultado de la suma realizada en la función es " . $resultado;





echo "<br><br><br>- Usando parametros por defecto<br>";

echo "- Ejemplo.<br><br><br>";

function sumarValorDefecto($valor1, $valor2=100)
{
    return $valor1 + $valor2;
}
$resultado = sumarValorDefecto(10);
echo "El resultado de la suma realizada en la función sin psar un segundo aprametro es " . $resultado;