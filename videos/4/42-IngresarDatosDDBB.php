<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 05/08/2016
 * Time: 7:07
 */

$textoBoton="Enviar";


echo "Para ingresar datos a la BBDD usamos la instrucción:<br>";

echo "<code>INSERT INTO NOMBRETABLA(CAMPO1, CAMPO2, CAMPO3, ...) VALUES (DATO1, DATO2, DATO3, ...)</code>";

require ("conexion.php");

$conexion = mysqli_connect($dbHost, $dbUsuario, $dbContrasena);

if (mysqli_connect_errno()) {
    echo "Se presento error al establecer la conexion con el servidor de BBDD";
    exit();
}

mysqli_select_db($conexion, $dbBaseDatos) or die(" - No se encuentra la base de datos en este servidor.");

mysqli_set_charset($conexion, "utf8");

$consulta = "INSERT INTO CAFESALUD (TIPO_ID, NRO_ID, APELLIDO1, APELLIDO2, NOMBRE1, NOMBRE2, SEXO, FEC_NAC, EDAD)
                            VALUES ('CC', '15260260', 'ZXVELASQUEZ', 'ZXORTIZ', 'ZX', 'ZX', 'M', '21/02/1987', 29)";

$resultado = mysqli_query($conexion, $consulta);

mysqli_close($conexion);

require ("42-Formulario registro.php");