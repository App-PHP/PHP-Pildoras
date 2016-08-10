<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 20/06/2016
 * Time: 11:28
 */

echo "<h2>Condicionales y prioridad de operadores</h2>";

echo "- Existen operadores aparentemente duplicados como son <code>&&</code> y <code>and</code><br>
Pero no son lo mismo. En el caso de <code>and</code>, este se ejecuta despues del igual.<br>
Debido a esto un <code>variable = true $$ false</code> retornaria <code>true</code>, pues se hace primero la asignación <br>";

echo "mas información respecto a esto en <a  target='_blank' href='http://php.net/manual/es/language.operators.precedence.php'>Precedencia de operadores</a><br>";

echo "- Ejemplo.<br><br><br>";

$var1 = true;
$var2 = false;

$resultado = $var1 && $var2;
if ($resultado){
    echo "El valor de la variable usando <code>&&</code> es Verdadero<br>";
}else{
    echo "El valor de la variable usando <code>&&</code> es Falso<br>";
}

$resultado = $var1 and $var2;//primero se ejecuta la asignacion $resultado = $var1
if ($resultado){
    echo "El valor de la variable usando <code>and</code> es Verdadero<br>";
}else{
    echo "El valor de la variable usando <code>and</code> es Falso<br>";
}
