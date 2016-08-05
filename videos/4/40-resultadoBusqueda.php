<!--Es necesario cargar de nuevo los CSS y JS. Desde esta ruta no carga estos archivos que fueron cargados desde los html-->
<link rel="stylesheet" href="../../css/bootstrap.min.css">

<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 04/08/2016
 * Time: 9:01
 */
//recuperamos el texto del campo del formulario

$stringBuscar = $_GET["buscar"];


include("../../config/config.php");
include("../../html/head.html");



require ("../3/conexion.php");

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

//consulta con el contenido del campo y con comodines
$consulta = "SELECT * FROM CAFESALUD WHERE NOMBRE1 like '%$stringBuscar%' ORDER BY EDAD";



//realizamos la consulta a la BBDD
//recorset
$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);

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



include("../../html/foot.html");