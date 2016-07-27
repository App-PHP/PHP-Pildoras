<?php
/**
 * Created by PhpStorm.
 * User: herna
 * Date: 26/07/2016
 * Time: 21:04
 */

echo "<h2>Compartir conexión, importaciones y consultas con filtro</h2>";

echo "- Es recomendable crear un archivo con los datos de configuración de la conexión.<br>";

echo "- Ejemplo.<br><br><br>";

require ("conexion.php");


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

$consulta = "SELECT * FROM CAFESALUD WHERE NOMBRE1='matias'";

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
    echo "<tr><td>$fila[0]</td><td>$fila[1]</td><td>$$fila[2]</td><td>$$fila[4]</td></tr>";
}
echo "</table>";

