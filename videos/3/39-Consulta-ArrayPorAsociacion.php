<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 03/08/2016
 * Time: 15:43
 */


echo "<h2>Consultas, con Array por Asociación y Comodines</h2>";

echo "- Usando la funcion <code>mysqli_fetch_array(nombreRecorSet, MYSQL_ASSOC)</code> podemos tener un array asociativo con el resultado de la consulta.<br>";

echo "En las consultas podemos usar comodines.<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;<code>%</code> Reemplaza una cadena de caracteres.<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;<code>_</code> Reemplaza un caracter.<br>";

echo "&nbsp;&nbsp;&nbsp;&nbsp;No se usa igual, se debe usar el operador <code>LIKE</code>.<br>";
echo "<code>'SELECT * FROM NOMBRETABLA WHERE NOMBRECAMPO LIKE '%CADENA'</code><br><br><br>";

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

//$consulta = "SELECT * FROM datospersonales";
//$consulta = "SELECT * FROM CAFESALUD WHERE NOMBRE1='matias'";
$consulta = "SELECT * FROM CAFESALUD WHERE SEXO='F' AND EDAD BETWEEN 15 AND 20 ORDER BY edad";

//realizamos la consulta a la BBDD
//recorset
$resultado = mysqli_query($conexion, $consulta);

$separador = "|";

//creamos una tabla para mostrar mejor los resultados obtenidos
echo "<table class='table table-bordered table-responsive table-hover'>";

//Encabezados de la tabla
echo "<thead>
    <td>TipoDocumento</td>
    <td>NumeroDocumento</td>
    <td>PrimerApellido</td>
    <td>SegundoApellido</td>
    <td>PrimerNombre</td>
    <td>SegundoNombre</td>
    <td>Sexo</td>
    <td>FechaNacimiento</td>
    <td>Edad</td></thead>";

//recorremos con un ciclo para mostrar todos los resultados de la consulta.
while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
    //tambien podria ser de la siguiente forma
    //while ($fila = mysqli_fetch_assoc($resultado)) {

    //imprimimos en una linea el resultado de cada linea arrojado en la consulta
    echo "<tr><td>$fila[TIPO_ID]</td>
            <td>$fila[NRO_ID]</td>
            <td>$fila[APELLIDO1]</td>
            <td>$fila[APELLIDO2]</td>
            <td>$fila[NOMBRE1]</td>
            <td>$fila[NOMBRE2]</td>
            <td>$fila[SEXO]</td>
            <td>$fila[FEC_NAC]</td>
            <td>$fila[EDAD]</td>
            </tr>";
}
echo "</table>";