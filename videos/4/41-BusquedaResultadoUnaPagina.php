<?php
/**
 * Created by PhpStorm.
 * User: herna
 * Date: 04/08/2016
 * Time: 20:59
 */

echo "<h2>Hacer una consulta en la BBDD, usando un unico archivo para el formulario y el resultado</h2>";


echo "Buscar por el campo primer nombre en la tabla de cafesalud.<br>";

echo "Anteponer @ donde se recibe el parametro del formulario para evitar error que se presenta en local.<br>";

echo "Especical cuidado en los parentesis al usar el metodo <code>'$ SERVER ['PHP_SELF']</code>.<br>";

echo "Esta es una solución diferente a la planteada en el video.<br>";

echo "- Ejemplo.<br><br><br>";


@$cadenaBusqueda = $_GET["buscar"];

if ($cadenaBusqueda == null) {
    mostrarFormulario();
} else {
    mostrarConsulta($cadenaBusqueda);
}

function mostrarFormulario(){
     echo "
    <form action='".$_SERVER["PHP_SELF"]."' method='get'>
    <div class='form-group'>
        <label for='buscar'>Buscar:</label>
        <input type='text' class='form-control' id='buscar' name='buscar' placeholder='Texto a buscar'>
    </div>
    <button type='submit' class='btn btn-default'>Submit</button>
</form>
    ";
}

function mostrarConsulta($cadenaBusqueda){
    require ("conexion.php");
    $conexion = mysqli_connect($dbHost, $dbUsuario, $dbContrasena);
    if (mysqli_connect_errno()) {
        echo "Se presento error al establecer la conexion con el servidor de BBDD";
        exit();
    }

    mysqli_select_db($conexion, $dbBaseDatos) or die(" - No se encuentra la base de datos en este servidor.");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT * FROM CAFESALUD WHERE NOMBRE1 like '%$cadenaBusqueda%' ORDER BY EDAD";

    $resultado = mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

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
}