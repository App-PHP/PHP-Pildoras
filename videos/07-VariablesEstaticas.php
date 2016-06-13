<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 10/06/2016
 * Time: 15:57
 */
echo "<h2>Variables estáticas</h2>";
echo "- En PHP las variables estaticas son aquellas que su creacion solo se ejecuta una vez y perduran despues de finalizar la funcion donde fueron credas.<br>";

echo "- Para que una variable tenga este comportamiento se debe anteponer en su creacion la palabra reservada <code>static</code>.<br>";

echo "- Ejemplo.<br><br><br>";


function miFuncion()
{
    static $contador = 0;
    $contador++;
    print $contador . "<br>";
}

miFuncion();
miFuncion();
miFuncion();
miFuncion();

echo "<br>Si no uso la palabra static, a cada ejecución el valor de la variable inicia en 0.<br>";

function miFuncion2()
{
    $contador2 = 0;
    $contador2++;
    print $contador2 . "<br>";
}

miFuncion2();
miFuncion2();
miFuncion2();
miFuncion2();