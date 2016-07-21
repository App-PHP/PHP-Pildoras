<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 20/07/16
 * Time: 19:25 PM
 */

echo "<h2>Metodos accesores</h2>";

echo "- Tambien conocidos como Setters and Getters. Pertimer asignar y obtener atributos de la instancia de un objeto<br>";

echo "- Los atributos se deben definir con uno de los siguientes modificadores de acceso<br>";

echo "- <code>public</code> Accesible desde cualquier parte.<br>";
echo "- <code>private</code> Accesible solo desde la misma clase.<br>";
echo "- <code>protected</code> Accesible sólo desde la misma clase y las clases herederas o hijas.<br>";


echo "- Ejemplo.<br><br><br>";

require("PersonaConGetAndSet.php");

$alumno = new Alumno();

//asignamos valores a los atributos de la instancia creada en la linea anterios
$alumno->setId(123);
$alumno->setNombres("Matias");
$alumno->setApellidos("Velasquez");

//consultamos los valores a los atributos asignados previamente

echo "El Id es: " . $alumno->getId() . ".<br>";
echo "El Nombre es: " . $alumno->getNombres() . ".<br>";
echo "El Apellido es: " . $alumno->getApellidos() . ".<br>";



