<?php

echo "<h2>Operadores matematicos I</h2>";

echo "- Los operadores matematicos son:<br>";
echo "<ul>
    <li>+ Suma</li>
    <li>- Resta</li>
    <li>* Multiplicación</li>
    <li>/ Divición</li>
    <li>% Modulo</li>
    <li>++ += Incremento</li>
    <li>-- -= Decremento</li>
</ul>";

echo "- Ejemplo.<br><br><br>";

//cargamos el archivo con el formulario definido
require("11-ejemplo_operadores.html");


if (isset($_POST["button"])) {
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

     if (!strcmp("Suma", $operacion)) {
        echo "La suma es " . ($numero1 + $numero2);
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
