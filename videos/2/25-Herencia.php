<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 10/07/16
 * Time: 12:25 PM
 */

echo "<h2>Herencia</h2>";

echo "- La herencia en PHP se logra con la palabra reservada <code>extends</code>. NO existe la herencia multiple.<br>";

echo "- Existe tambien la reescritura de metodos.<br>";

echo "- Si la subclase tiene su propio constructor, siempre se usa este, aunque se pasen los parametros de la superclase.<br>";

echo "- Podemos llamar un metodo o atributoi de la clase padre con la instrucion <code>parent::</code>.<br>";


echo "- Ejemplo.<br><br><br>";

require("Persona.php");

$alumno1 = new Alumno("1111","nombres 1111", "1111 apellidos", 20);
$alumno2 = new Alumno();

$alumno1->mostrarSemestre();
$alumno1->cambiarSemestre(10);
$alumno1->mostrarSemestre();

$profe1 = new Profesor(555, "profe 1", "profe 1", 25); //usando el constructor de la superclase

$profe1->mostrarEdad(); //llamamndo metodo sobreescrito

$profe1->asignarId(852);
