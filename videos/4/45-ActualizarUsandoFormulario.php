<?php
/**
 * Created by PhpStorm.
 * User: herna
 * Date: 06/08/2016
 * Time: 19:06
 */

echo "<h2>Actualizar registros en la BBDD usando formulario</h2>";


echo "Usalos la sentencia <code>UPDATE</code>.<br>";

echo "<code>UPDATE NOMBRETABLA SET COLUNMA1=NUEVOVALOR, COLUMNA2=NUEVOVALOR WHERE CAMPO=CONDICION;</code>.<br>";

echo "Se usa una función para obtener el numero de registros actualziados, esta es: <code>(mysqli_affected_rows(conexion)</code><br>";

echo "Siempre se debe poner la comilla sencilla a las variables que actualizan los campos <code>'$ nombreCampo'</code><br>";

echo "- Ejemplo.<br><br><br>";

$textoBoton = "Actuliazar";
require("42-Formulario registro.php");

@$tipoID = $_GET["tipoID"];
@$numeroID = $_GET["numeroID"];
@$apellido1 = $_GET["apellido1"];
@$apellido2 = $_GET["apellido2"];
@$nombre1 = $_GET["nombre1"];
@$nombre2 = $_GET["nombre2"];
@$sexo = $_GET["sexo"];
@$fechaNacimiento = $_GET["fechaNacimiento"];
@$edad = $_GET["edad"];

if ($tipoID != null) {
    actualizarRegistros();
}

function actualizarRegistros()
{
    global $tipoID;
    global $numeroID;
    global $apellido1;
    global $apellido2;
    global $nombre1;
    global $nombre2;
    global $sexo;
    global $fechaNacimiento;
    global $edad;

    require("conexion.php");
    $conexion = mysqli_connect($dbHost, $dbUsuario, $dbContrasena);

    if (mysqli_connect_errno()) {
        echo "Se presento error al establecer la conexion con el servidor de BBDD";
        exit();
    }

    mysqli_select_db($conexion, $dbBaseDatos) or die(" - No se encuentra la base de datos en este servidor.");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "UPDATE CAFESALUD SET TIPO_ID='$tipoID', APELLIDO1='$apellido1', APELLIDO2='$apellido2', NOMBRE1='$nombre1', NOMBRE2='$nombre2', SEXO='$sexo', FEC_NAC='$fechaNacimiento', EDAD='$edad' WHERE NRO_ID='$numeroID'";

    //$consulta = "UPDATE CAFESALUD SET TIPO_ID = '$tipoID' WHERE NRO_ID='15264970'";

    $resultado = mysqli_query($conexion, $consulta);

    if ($conexion) {
        if (mysqli_affected_rows($conexion) > 0) {
            echo "La operacón sobre la BBDD fue realizada con exito.<br>";
            echo "Fueron afectadas " . mysqli_affected_rows($conexion) . " lineas.<br>";
        } else {
            echo "Ninguna linea afectada.<br>";
        }

    } else {
        echo "No se pudo realizar la operación sobre la BBDD.<br>";
    }
    mysqli_close($conexion);

}