<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 20/07/16
 * Time: 19:25 PM
 */

echo "<h2>Modificadores de acceso</h2>";

echo "- Modularidad, dividir en modulos, dividir en clases.<br>";

echo "- Encapsulación, 'esconder' los metodos y atributos para otras clases.<br>";

echo "- Modificadores de acceso, definen quienes pueden acceder a cada metodo y cada atributo.<br>";

echo "- <code>public</code> Accesible desde cualquier parte.<br>";
echo "- <code>private</code> Accesible solo desde la misma clase.<br>";
echo "- <code>protected</code> Accesible sólo desde la misma clase y las clases herederas o hijas.<br>";

echo "- esto genera un error, ya que se está intentando asignar un valor a un atributo private.<br>";


echo "- Ejemplo.<br><br><br>";

require("PersonaConModificarAcceso.php");

$alumno1 = new Alumno();

$alumno1->semestre=55; //
//echo $alumno1->semestre;