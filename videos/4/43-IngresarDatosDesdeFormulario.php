<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 05/08/2016
 * Time: 14:24
 */


echo "<h2>Ingresando datos desde un formaulario</h2>";

echo "En este eejmplo ingresamos un registro a la BBDD<br>";

echo "Usamos variables globales<br>";

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

if (!($tipoID == null || $numeroID == null || $apellido1 == null || $nombre1 == null)) {
    ingresarRegistro();
}

function ingresarRegistro()
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

    $consulta = "INSERT INTO CAFESALUD (TIPO_ID, NRO_ID, APELLIDO1, APELLIDO2, NOMBRE1, NOMBRE2, SEXO, FEC_NAC, EDAD)
                            VALUES ($tipoID, $numeroID, $apellido1, $apellido2, $nombre1, $nombre2, $sexo, $fechaNacimiento, $edad)";

    $resultado = mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    if ($resultado){
        echo "Usuario guardado correctamente";
    }else{
        echo "NO se pudo guardar";
    }

}