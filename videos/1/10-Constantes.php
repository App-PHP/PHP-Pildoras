<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 10/06/2016
 * Time: 15:57
 */
echo "<h2>Constantes</h2>";
echo "- En PHP para crear una constante se usa la funcion <code>define</code>. NO se usa \"$\".<br>";

echo "- Las constantes son de hambito global. Sus nombre deben estar en mayusculas<br>";

echo "- Puede recibir un tercer parametro opcional, de tipo boolean, si es insencible a mayusculas es TRUE, no recomendable<br>";

echo "- Ejemplo.<br><br><br>";

define("PI", 3.141516);

print (PI."<br>");
echo "El numero Pi es " . PI;


echo "<h2>Constantes Predefinidas, o Constantes magicas</h2>";
echo "- Existen unas constantes propias del lenguaje, importante conocerlas, algunas son<br>";

echo "- Ejemplo.<br><br><br>";
echo  "El numero donde está escrita esta linea es: " . __LINE__. ". usando <code>__LINE__</code>.<br>";
echo  "La rura del archivo es: " . __FILE__ . ". usando <code>__FILE__</code>.<br>";
echo  "El nanespace: " . __NAMESPACE__ . ". usando <code>__NAMESPACE__</code>.<br>";
echo  "La clase: " . __CLASS__. ". usando <code>__CLASS__</code>.<br>";
echo  "La version de PHP es: " . PHP_VERSION. ". usando <code>PHP_VERSION</code>.<br>";

echo "- se pueden buscar mas en <a href='http://php.net/manual/es/language.constants.predefined.php'>PHP Constantes Predefinidas</a> y <a href='http://php.net/manual/es/reserved.constants.php'>Mas PHP Constantes predefinidas</a> <br>";