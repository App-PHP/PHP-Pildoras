<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 05/07/2016
 * Time: 14:15
 */

echo "<h2>Recorrer Arrays</h2>";

echo "- Para determinar si un campo es un array o una variable se puede usar la función <code>is_array</code>.<br>";

echo "- Ejemplo.<br><br><br>";

$diasSemana[] = "Lunes";
$diasSemana[] = "Martes";
$diasSemana[] = "Miercoles";

$datos = "ss";

echo "Usando la función <code>is_array</code>: con un array" . is_array($diasSemana) . ". y con una variable: " . is_array($datos) . ".<br>";

if (is_array($diasSemana)) {
    echo "SI es array.<br>";
} else {
    echo "NO es array.<br>";
}

if (is_array($datos)) {
    echo "SI es array.<br>";
} else {
    echo "NO es array.<br>";
}


echo "<br><br><br>- Para recorrer un array asociativose usa el bucle <code>foreach(nombreArray as clave=>valor)</code>. Con sus sisgnos dolar($)<br>";

echo "- Ejemplo.<br><br><br>";

$miArray = array("valor1" => "Uno", "valor2" => "Dos", "valor3" => "Tres", "valor4" => "Cuatro");

foreach ($miArray as $clave => $valor) {
    echo "A la clave $clave le corresponde: $valor.<br>";
}


echo "<br><br><br>- Para recorrer un array indexado. Se hace como de costumbre con un ciclo for.<br>";

echo "- Ejemplo.<br><br><br>";

$dias = array("Lunes", "Martes", "Mieroles", "Jueves", "Viernes", "Sabado", "Domingo");

for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$i] . ".<br>";
}

echo "<br><br><br>- Para ordenas un array usamos la función <code>sort</code>.<br>";

echo "- Ejemplo.<br><br><br>";

sort($dias);

for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$i] . ".<br>";
}