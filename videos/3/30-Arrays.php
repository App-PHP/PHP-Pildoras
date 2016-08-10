<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 05/07/2016
 * Time: 14:15
 */

echo "<h2>Arrays</h2>";

echo "- PHP tiene dos tipos de arrays, los indexados y por referencia<br>";

echo "- Para crear un array aplican las reglas de creacion de variables.<br>";

echo "- Se puede no usar el indice para que agrege los elementos al final del array.<br>";

echo "- Ejemplo.<br><br><br>";

$diasSemana[] = "Lunes";
$diasSemana[] = "Martes";
$diasSemana[] = "Miercoles";

echo "Mostranto el indice 1 en el primer array: " . $diasSemana[1] . "<br>";


echo "<br><br><br>- Otra forma, si se tienen los datos al momentom de la creación del arreglo es separandolos por comas dentro de los corchetes. En esta forma se usan los parentesis y la palabra reservada <code>array('','','','')</code><br>";

echo "- Ejemplo.<br><br><br>";

$dias = array("Lunes", "Martes", "Mieroles");

echo "Mostranto el indice 1 en el segundo array: " . $dias[1] . "<br>";

echo "<br><br><br>- Para los arrays por referencia tambien se usa palabra reservada y operador fecha<code>array(nombre=>ValorNombre,....)</code><br>";
echo "- Un error común es llamar las claves sin las comillas.<br>";

$miArray = array("valor1" => "Uno", "valor2" => "Dos", "valor3" => "Tres", "valor4" => "Cuatro");

echo "Mostranto el valor referenciado con el nombre de valor2: " . $miArray["valor1"] . "<br>";


echo "<br><br><br>- Agregando nuevos valores a los array existentes.<br>";

echo "- Con el array indexado solo se hace sin incluir el indice<br>";
$diasSemana[] = "Jueves";
echo "Mostranto el indice 3 en el primer array: " . $diasSemana[3] . "<br>";


echo "- Con el array por asociado o por referencia, se llama por el nombre al arreglo y entre corchetes la clave = a su valor<br>";
$miArray["valor100"]= "Cien";
echo "Mostranto el valor referenciado con el nombre de valor100: " . $miArray["valor100"] . "<br>";