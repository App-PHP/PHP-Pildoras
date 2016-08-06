<?php
/**
 * Created by PhpStorm.
 * User: herna
 * Date: 06/08/2016
 * Time: 11:59
 */


echo "<h2>Eliminar un registro en la BBDD usando formulario</h2>";


echo "Usalos la sentencia <code>DELETE</code>.<br>";

echo "<code>DELETE FROM NOMBRETABLA WHERE CAMPO=CONDICION;</code>.<br>";

echo "- Ejemplo.<br><br><br>";

$textoBoton = "Eliminar";
require("42-Formulario registro.php");

@$numeroId = $_GET["numeroID"];

if ($numeroId != null) {
    elimarRegistro();
}


function elimarRegistro()
{
    global $numeroId;
    echo "borrar $numeroId<br>";

    require("conexion.php");

    $conexion = mysqli_connect($dbHost, $dbUsuario, $dbContrasena);
    if (mysqli_connect_errno()) {
        echo "Se presento error al establecer la conexion con el servidor de BBDD";
        exit();
    }
    mysqli_select_db($conexion, $dbBaseDatos) or die(" - No se encuentra la base de datos en este servidor.");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "DELETE FROM CAFESALUD WHERE NRO_ID='" . $numeroId . "'";

    $resultado = mysqli_query($conexion, $consulta);

    if ($conexion) {
        if (mysqli_affected_rows($conexion) > 0) {
            echo "La operacón sobre la BBDD fue realizada con exito<br>";
            echo "Fueron afectadas " . mysqli_affected_rows($conexion) . " lineas<br>";
        } else {
            echo "Ninguna linea afectada<br>";
        }

    } else {
        echo "No se pudo realizar la operación sobre la BBDD<br>";
    }
    mysqli_close($conexion);

}