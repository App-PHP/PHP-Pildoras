<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 20/07/16
 * Time: 19:25 PM
 */

echo "<h2>Metodos y Atributos Static</h2>";

echo "- Estos metodos y atributos son el mismo para cada instancia de la clase, no es una copia para cada instancia<br>";

echo "- Se definen con la palabra <code>static</code><br>";

echo "- Para llamarlos se usala palabra y el operador <code>self::</code><br>";

echo "- En el caso de los metodos, se llaman tambien con el nombre de la clase, seguido de <code>self::</code>, y finalmente el nombre del metodo static<br>";


echo "- Ejemplo.<br><br><br>";

require("Concesionario.php");


//Compra_vehiculo::$ayuda = 10000;


$compra_Antonio = new Compra_vehiculo("compacto");

$compra_Antonio->climatizador();

$compra_Antonio->tapiceria_cuero("blanco");

echo $compra_Antonio->precio_final() . "<br>";

$compra_Ana = new Compra_vehiculo("compacto");

$compra_Ana->climatizador();

$compra_Ana->tapiceria_cuero("rojo");

echo $compra_Ana->precio_final();


echo "<br><br><br>- Ahora con los metodos<br>";

echo "- Ejemplo.<br><br><br>";


//ejecutamos el metodo estatico para realziar el descuetno a todos las nuevas instancias
Compra_vehiculo::descuento_gobierno();

$compra_Antonio = new Compra_vehiculo("compacto");

$compra_Antonio->climatizador();

$compra_Antonio->tapiceria_cuero("blanco");

echo $compra_Antonio->precio_final() . "<br>";

$compra_Ana = new Compra_vehiculo("compacto");

$compra_Ana->climatizador();

$compra_Ana->tapiceria_cuero("rojo");

echo $compra_Ana->precio_final();