<?php
/**
 * Created by PhpStorm.
 * User: herna
 * Date: 08/08/2016
 * Time: 7:35
 */

echo "<h2 class='text-capitalize'>Consultas preparadas</h2>";


echo "Usaremos consultas preparadas para evitar inyeccion sql.<br>";

echo " - Tienen como ventaja que son mas rapidas, mas seguras, se pueden usar con POO<br>";

echo " - Desventajas, requieren mas código.<br>";


echo "1. Se sustituye el criterio de busqueda por el sigbolo <code>?</code>.<br>";

echo "2. Se prepara la consulta con la funcion <code>mysql_prepare(conexion, consulta)</code> su retorno será un objeto del tipo <code>mysqli_stmt</code>.<br>";

echo "3. Luego unimos los parametros a la sentencia. Para eso usamos <code>mysqli_stmt_bind_param()</code>la cual retorna un booleano, Requiere tres parametros<br>";

echo "4. Por utimo ejecutamos la consulta con <code>mysqli_stmt_ejecute()</code>la cual retorna un booleano, Requiere tambien el objeto stmt<br>";

echo "5. Asociamos los valores. Para esto usamos la función <code>mysqli_stmt_bind_result()</code><br>";

echo "6. Leer los valoresPara esto usamos la función <code>mysqli_stmt_fetch()</code><br>";


echo "- Ejemplo.<br><br><br>";

@$cadenaBusqueda = $_GET["buscar"];


if ($cadenaBusqueda == null) {
    mostrarFormulario();
} else {
    mostrarConsulta($cadenaBusqueda);
}


function mostrarConsulta($cadenaBusqueda)
{
    require("conexion.php");

    $conexion = mysqli_connect($dbHost, $dbUsuario, $dbContrasena);

    if (mysqli_connect_errno()) {
        echo "Se presento error al establecer la conexion con el servidor de BBDD";
        exit();
    }

    mysqli_select_db($conexion, $dbBaseDatos) or die(" - No se encuentra la base de datos en este servidor.");

    mysqli_set_charset($conexion, "utf8");

//paso 1
    $sql = "SELECT TIPO_ID, NRO_ID, APELLIDO1, APELLIDO2, NOMBRE1, NOMBRE2, SEXO, FEC_NAC, EDAD FROM CAFESALUD WHERE NOMBRE1 = ?";

//paso 2
    $resultado = mysqli_prepare($conexion, $sql);

//paso 3. recibe tres parametros (el objeto stmt devuelto en el paso anterior, el tipo de dato, y el criterio de la busqueda)
//cuando es un String se usa como segundo parametro "s"
    $exitoBool = mysqli_stmt_bind_param($resultado, "s", $cadenaBusqueda);

//paso 4
//podemos usar la misma variable del paso anterios

    $exitoBool = mysqli_stmt_execute($resultado);

    if ($exitoBool) {
//    paso 5
//    creamos una variable por cada campo que retorne la consulta;
        $exitoBool = mysqli_stmt_bind_result($resultado, $tipoID, $numeroID, $apellido1, $apellido2, $nombre1, $nombre2, $sexo, $fechaNacimiento, $edad);

//    paso 6
        //ToDo: hacer que salgfa el numero de filas devueltas por la consulta
        echo "<p class='text-center alert-success'>Fueron afectadas " . mysqli_stmt_num_rows($resultado) . " linas.</p>";
        echo "<table class='table table-bordered table-responsive table-hover'>";

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

        while (mysqli_stmt_fetch($resultado)) {
            echo "<tr>
                <td>$tipoID</td>
                <td>$numeroID</td>
                <td>$apellido1</td>
                <td>$apellido2</td>
                <td>$nombre1</td>
                <td>$nombre2</td>
                <td>$sexo</td>
                <td>$fechaNacimiento</td>
                <td>$edad</td>
            </tr>";
        }
    } else {
        echo "La consulta no tuvo exito";
    }
    mysqli_stmt_close($resultado);
}


function mostrarFormulario()
{
    echo "
    <form action='" . $_SERVER["PHP_SELF"] . "' method='get'>
    <div class='form-group'>
        <label for='buscar'>Buscar:</label>
        <input type='text' class='form-control' id='buscar' name='buscar' placeholder='Texto a buscar'>
    </div>
    <button type='submit' class='btn btn-default'>Submit</button>
</form>
    ";
}
