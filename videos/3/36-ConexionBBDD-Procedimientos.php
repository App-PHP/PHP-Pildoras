<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 26/07/2016
 * Time: 14:18
 */

echo "<h2>Conectar con BBDD por Procedimientos</h2>";

echo "- En PHP las BBDD se pueden conectar de dos formas, con POO o con Procedimientos.<br>";

echo "- Para conectarnos necesitamos, el host, el usuario, la contraseña y el nombre de la BBBDD.<br>";

echo "- Ejemplo.<br><br><br>";

$dbHost = "localhost";
$dbUsuario = "root";
$dbContrasena = "";
$dbBaseDatos = "personas";

//ahora creamos la conexión

$conexion = mysqli_connect($dbHost, $dbUsuario, $dbContrasena);
//No pasamos el curto parametro con la intensión de saber mas en caso de error

//verificamos si se presento error de conexión

if (mysqli_connect_errno()) {
    echo "Se presento error al establecer la conexion con el servidor de BBDD";
    exit();
}

//verificamos si existe la base de datos en este servidor
mysqli_select_db($conexion, $dbBaseDatos) or die(" - No se encuentra la base de datos en este servidor.");

//impedimos poblemas con caracteres como la ñ o las tildes
mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT * FROM DATOSPERSONALES";

//realizamos la consulta a la BBDD
//recorset
$resultado = mysqli_query($conexion, $consulta);

$separador = "|";

//creamos una tabla para mostrar mejor los resultados obtenidos
echo "<table class='table table-bordered table-responsive table-hover'>";
echo "<thead><td>Documento</td><td>Nombre</td><td>Apellido</td><td>Edad</td></thead>";

//recorremos con un ciclo para mostrar todos los resultados de la consulta.
while ($fila = mysqli_fetch_row($resultado)) {

    //imprimimos en una linea el resultado de cada linea arrojado en la consulta
    echo "<tr><td>$fila[0]</td><td>$fila[1]</td><td>$$fila[2]</td><td>$$fila[3]</td></tr>";
}
echo "</table>";