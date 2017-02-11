<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 20/06/2016
 * Time: 11:28
 */

echo "<h2>Funciones matematicas y casting</h2>";

echo "- En PHP existen una gran cantidad de funciones matematicas.<br>";

echo "- El listado completo se puede necontrar en <a href='http://php.net/manual/es/ref.math.php'></a>Funciones Matemáticas <br>";

echo "- Ejemplo.<br><br><br>";

echo "Función <code>base_convert</code>. Convertir un número entre bases arbitrarias<br>";

$numero = "185";
$baseOrigen = 10;
$baseDestino = 2;
cambiarBase($numero, $baseOrigen, $baseDestino);


$numero = "abcdef";
$baseOrigen = 16;
$baseDestino = 10;
cambiarBase($numero, $baseOrigen, $baseDestino);

$numero = "256";
$baseOrigen = 10;
$baseDestino = 2;
cambiarBase($numero, $baseOrigen, $baseDestino);

$numero = "60";
$baseOrigen = 10;
$baseDestino = 6;
cambiarBase($numero, $baseOrigen, $baseDestino);

echo "<br><br><br>Binario a decimal, función <code>bindec</code><br>";

echo "El 110011 escrito en decimal es: " . bindec('110011') . "<br>";
echo "El 000110011 escrito en decimal es: " . bindec('000110011') . "<br>";
echo "El 111 escrito en decimal es: " . bindec('111') . "<br>";


echo "<br><br><br>Redondear fracciones hacia arriba, función <code>ceil</code><br>";
echo ceil(4.3) . "<br>";    // 5
echo ceil(9.999) . "<br>";  // 10
echo ceil(-3.14) . "<br>";  // -3


echo "<br><br><br>Genera un mejor número entero aleatorio, función <code>mt_rand</code><br>";


echo "Numero aleatorio entre 30 y 55: " . mt_rand(30, 55) . "<br>";


echo "<h3>El casting es implicito</h3><br>";

echo "- Ejemplo.<br><br><br>";

$num1 = "5";

$num1 += 2;
echo ('El valor de la variable $num1 se ha convertido en tipo int. Su valor es: ') . $num1 . "<br><br>";

echo('Tambien existe un casting explicito, se hace anteponiendo dentro de parentecis el tipo de variable<br>
usando algo como <code>$resultado = (int)$num2;</code>');

$num2 = "10";
$resultado = (int)$num2;

function cambiarBase($num, $baseOrigen, $baseDestino){
    print("El numero $num en base $baseOrigen escrito en base $baseDestino es: ")
        . base_convert($num, $baseOrigen, $baseDestino) . "<br>";
}