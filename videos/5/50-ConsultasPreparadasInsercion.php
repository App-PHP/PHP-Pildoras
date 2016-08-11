<?php
/**
 * Created by PhpStorm.
 * User: herna
 * Date: 08/08/2016
 * Time: 22:06
 */

echo "<h2 class='text-capitalize'>Consultas preparadas Insertar</h2>";

echo " - En la operación de inserción, se debe poner tantas veces el signo<code>?</code> como campos se vallan a ingresara la BBDD.<br>";

echo " - En la operación de inserción, se debe poner tantas veces el signo<code>?</code> como campos se vallan a ingresara la BBDD.<br>";

echo " - En la sentencia que usa la función <code>mysqli_stmt_bind_param</code> se debe usar como segundo parametro una letra indicando cada tipo de dato recibido, el tercer parametro es cada uno de los datos a ingresar a la BBDD.<br>";

echo " - Usaremos consultas preparadas para evitar inyeccion sql.<br>";

echo "<br>- Ejemplo.<br><br><br>";

$textoBoton = "Guardar";
require("videos/4/42-Formulario registro.php");

@$tipoID = $_GET["tipoID"];
@$numeroID = $_GET["numeroID"];
@$apellido1 = $_GET["apellido1"];
@$apellido2 = $_GET["apellido2"];
@$nombre1 = $_GET["nombre1"];
@$nombre2 = $_GET["nombre2"];
@$sexo = $_GET["sexo"];
@$fechaNacimiento = $_GET["fechaNacimiento"];
@$edad = $_GET["edad"];

if ($numeroID != null) {
    guardarRegistro();
}

function guardarRegistro()
{
    require("videos/4/conexion.php");

    $conexion = mysqli_connect($dbHost, $dbUsuario, $dbContrasena);

    if (mysqli_connect_errno()) {
        echo "Se presento error al establecer la conexion con el servidor de BBDD";
        exit();
    }

    mysqli_select_db($conexion, $dbBaseDatos) or die(" - No se encuentra la base de datos en este servidor.");

    mysqli_set_charset($conexion, "utf8");

//paso 1
    //$sql = "SELECT TIPO_ID, NRO_ID, APELLIDO1, APELLIDO2, NOMBRE1, NOMBRE2, SEXO, FEC_NAC, EDAD FROM CAFESALUD WHERE NOMBRE1 = ?";
    $sql = "INSERT INTO CAFESALUD (TIPO_ID, NRO_ID, APELLIDO1, APELLIDO2, NOMBRE1, NOMBRE2, SEXO, FEC_NAC, EDAD)
            VALUES (?,?,?,?,?,?,?,?,?)";

//paso 2
    $resultado = mysqli_prepare($conexion, $sql);

//paso 3. recibe tres parametros (el objeto stmt devuelto en el paso anterior, el tipo de dato, y el criterio de la busqueda)
//cuando es un String se usa como segundo parametro "s"
    $exitoBool = mysqli_stmt_bind_param($resultado, "sissssssi", $tipoID, $numeroID, $apellido1, $apellido2, $nombre1, $nombre2, $sexo, $fechaNacimiento, $edad);

//paso 4
//podemos usar la misma variable del paso anterios

    $exitoBool = mysqli_stmt_execute($resultado);

    if ($exitoBool) {
//    paso 5
//    creamos una variable por cada campo que retorne la consulta;
        //$exitoBool = mysqli_stmt_bind_result($resultado, $tipoID, $numeroID, $apellido1, $apellido2, $nombre1, $nombre2, $sexo, $fechaNacimiento, $edad);

//    paso 6
        //ToDo: hacer que salgfa el numero de filas devueltas por la consulta
        echo "<p class='text-center alert-success'>Agregado un nuevo registro exitosamente.</p>";

    } else {
        echo "La consulta no tuvo exito";
    }
    mysqli_stmt_close($resultado);
}