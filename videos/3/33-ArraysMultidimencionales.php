<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 05/07/2016
 * Time: 14:15
 */

echo "<h2>Array Muntidimencionales</h2>";

echo "- Se crean con la palabra <code>array(clave=>array(ele1, ele2...),...)</code>.<br>";

echo "- Ejemplo.<br><br><br>";

$alimentos = array("Fruta" => array("Tropical" => "Kiwi", "Citrico" => "Mandarina", "Otros" => "Manzana"),
    "Leche" => array("Animal" => "Vaca", "Vegetal" => "Coco"),
    "Carne" => array("Vacuno" => "Lomo", "Porcino" => "Pata"));


echo "- Si quiero acceder a Lomo.<br>";

echo $alimentos["Carne"]["Vacuno"] . "<br>";

echo "- Recorriendo el array bidimencional. Usamos la función <code>list</code>.<br>";

echo "- Ejemplo.<br><br><br>";

foreach ($alimentos as $claveAlim => $alim) {
    echo $claveAlim.":<br>";

    while (list($clave, $valor) = each($alim)) {
        echo "--$clave, $valor.<br>";
    }
    echo "<br>";
}

echo "- Otra forma, usando dos foreach.<br>";


echo "- Ejemplo.<br><br><br>";

foreach ($alimentos as $claveAlimentos=>$valorAlimentos){
    echo "<h3>$claveAlimentos</h3>";
    foreach ($valorAlimentos as $clave=>$valor){
        echo "<h4>&nbsp;&nbsp;&nbsp;$clave, $valor</h4>";
    }
}


echo "- Una tercera forma es usndo la función <code>var_dump.<br>";

echo "- Ejemplo.<br><br><br>";

echo var_dump($alimentos);