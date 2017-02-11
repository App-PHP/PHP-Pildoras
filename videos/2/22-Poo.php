<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 10/07/16
 * Time: 12:25 PM
 */

echo "<h2>POO</h2>";

echo "- Para crear una clase se usa la palabra reservada <code>class</code> y para crear una instancia se usa <code>new</code><br>";

echo "- Para crear los atributos usamos la palabra reservada <code>var</code><br>";

echo "- Para crear los metodos se usa la palabra reservada <code>function</code><br>";

echo "- Para crear el constructor usamos la palabra reservada <code>function</code>seguida del nombre, que tiene que ser el mismo de la clase<br>";

echo "- Para fijar los valores iniciales en el constructor, usamos <code>'\$this->'</code><br>";

echo "- Para llamar metodos, consultar y asignar valores atributos , usamos <code>'->'</code><br>";

echo "- En las ultimas versiones, el constructor se crea usando el metodo <code>function __construct(){...}</code><br>";


echo "- Ejemplo.<br><br><br>";

require("Carro.php");

$miCarro = new Carro();
$tuCarro = new Carro();

$miCarro->arrancar();
$miCarro->girar();
$miCarro->frenar();
echo "El numero de ruedas de mi carro es " . $miCarro->nroRuedas . "<br>";

echo "- Ahora cambiamos el numero de ruedas.<br>";
$miCarro->nroRuedas = 5;
echo "El numero de ruedas de mi carro es " . $miCarro->nroRuedas . "<br>";

echo "Ahora cambiamos el color del carro usando un metodo con parametros<br>";
$miCarro->estableceColor("Azul");
echo "El color accediento al atributo es: " . $miCarro->color . ".<br>";


