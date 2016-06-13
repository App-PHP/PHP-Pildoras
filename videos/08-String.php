<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 10/06/2016
 * Time: 15:57
 */
echo "<h2>String</h2>";

echo "- Para mostrar los string se usa la función <code>print()</code> o la instrución <code>echo</code>. Evitando siempre usar dos pares de comillas simples o sencillas .<br>";

echo "- Ejemplo.<br><br><br>";

echo  "<p class='text-info bg-danger'>Este texto tiene las clases CSS entre comillas simples</p><br><br><br>";

echo "- Para comparar dos cadenas de pueden usar las funciones <code>strcmp</code> y <code>strcasecmp</code>.<br>";

echo "- Podemos usar la barra invertida <code>\</code> para salvar un caracter, asi podemos usar en una misma linea la misma comilla.<br>";

echo "- La primera diferencia entre mayusculas y minusculas, la segunda no lo hace.<br>";

echo "- Estas funciones devuelven \"1\" en caso de ser verdadera, cadenas diferentes.<br>";

echo "- Estas funciones devuelven \"0\" en caso de ser falsas, cadenas iguales.<br>";

echo "- Es como si preguntaramos si son falsas, el true es retornado cuando efectivamente son falsas.<br>";

echo "- En un echo, las comillas simplen muestran textual y las comillas dobles muestran el valor de la variable.<br>";


echo "- Ejemplo.<br><br><br>";

$var1 = "casa";
$var2 = "Casa";

$resultado1 = strcmp($var1, $var2);
$resultado2 =strcasecmp($var1, $var2);


echo "<br><br>- Ejemplo de la funcion <code>strcmp</code>.<br>";
if($resultado1){
    echo "Según la funcion strcmp, $var1 y la $var2 son diferentes.<br>";
}else{
    echo "Según la funcion strcmp, $var1 y la $var2 son iguales.<br>";
}


echo "<br><br>- Ejemplo de la funcion <code>strcasecmp</code><br>.";
if($resultado2){
    echo "Según la función strcasecmp, $var1 y $var2 son diferentes.<br>";
}else{
    echo "Según la función strcasecmp, $var1 y $var2 son iguales.<br>";
}