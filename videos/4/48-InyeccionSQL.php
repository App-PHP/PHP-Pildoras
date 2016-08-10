<?php
/**
 * Created by PhpStorm.
 * User: herna
 * Date: 08/08/2016
 * Time: 6:33
 */


echo "<h2>Evitar la inyección SQL</h2>";


echo "Para esto, podemos usar tres metodos, estos son:<br>";

echo " - Usando la función de mysqli<code> mysqli_real_escape_string()</code>. Esta es mas recomendada<br>";

echo " - Usando la función de mysqli<code> mysqli_addslashes()</code>.<br>";

echo " - Usando consultas preparadas.<br>";

echo "Para usar <code> mysqli_real_escape_string()</code> debemos primero crear la coneción, antes que los campos con el metodo <code>GET[]</code>, pues esta función recibe como parametros la conexión y la creación del campo con este metodo.<br>";

echo "Ambas funciones ignoran los caracteres mas usados en este tipo de ataque, pero <code> mysqli_real_escape_string()</code> además de ignorar estos caracteres, tambien lo hace con sus correspondientes codigos ascci, por eso esta función es mas recomendada.<br>";


echo "- Ejemplo.<br><br><br>";


/**
 * creamos la coneción
 */
require("conexion.php");
$conexion = mysqli_connect($dbHost, $dbUsuario, $dbContrasena);
if (mysqli_connect_errno()) {
    echo "Se presento error al establecer la conexion con el servidor de BBDD";
    exit();
}
/**
 * cambiamos de base de datos
 */
mysqli_select_db($conexion, $dbBaseDatos) or die(" - No se encuentra la base de datos en este servidor.");

/**
 * cambianos la codificación
 */
mysqli_set_charset($conexion, "utf8");

/**
 * usamos la función mysqli_real_escape_string
 */
mysqli_real_escape_string($conexion, @$cadenaBusqueda = $_GET["buscar"]);

/**
 * preguntamos por el estado del campo digitado o no
 */
if ($cadenaBusqueda == null) {
    mostrarFormulario();
} else {
    mostrarConsulta($cadenaBusqueda);
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

function mostrarConsulta($cadenaBusqueda)
{
    global $conexion;

    $consulta = "SELECT * FROM CAFESALUD WHERE NOMBRE1 like '%$cadenaBusqueda%' ORDER BY EDAD";

    $resultado = mysqli_query($conexion, $consulta);

    /**
     * verificamos si la consulta tubo exito
     */
    if ($resultado) {
        if (mysqli_affected_rows($conexion) > 0) {
            echo "<p class='text-center alert-success'>Fueron afectadas " . mysqli_affected_rows($conexion) . " linas.</p>";
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
        } else {
            echo "La operación no afecto ninguna linea";
        }
    } else {
        echo("NO fue posible hacer la consulta");
    }
    /**
     * cerramos la conexión
     */
    mysqli_close($conexion);
}