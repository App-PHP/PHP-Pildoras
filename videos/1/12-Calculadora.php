<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 15/06/2016
 * Time: 16:11
 */


if (isset($_POST["button"])) {

    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    calcular($operacion); //paso de parametros
}

function calcular($operacion)
{
    //uso de varialbes globales
    global $numero1;
    global $numero2;

    if (!strcmp("Suma", $operacion)) {
        $resultado = $numero1 + $numero2;
        echo "<p class='text-warning'>La suma es $resultado</p>";
    }
    if (!strcmp("Resta", $operacion)) {
        echo "La resta es " . ($numero1 - $numero2);
    }
    if (!strcmp("Multiplicación", $operacion)) {
        echo "La Multiplicación es " . ($numero1 * $numero2);
    }
    if (!strcmp("División", $operacion)) {
        echo "La División es " . ($numero1 / $numero2);
    }
    if (!strcmp("Módulo", $operacion)) {
        echo "La Módulo es " . ($numero1 % $numero2);
    }

}