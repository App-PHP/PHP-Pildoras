<style>
    h1{
        text-align:center;
    }

    table{
        background-color:#2fd8ff;
        padding:5px;
        border:#666 5px solid;
    }

    .no_validado{
        font-size:18px;
        color:#F00;
        font-weight:bold;
    }

    .validado{
        font-size:18px;
        color:#0C3;
        font-weight:bold;
    }


</style>

<?php
/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 10/06/2016
 * Time: 15:57
 */
echo "<h2>Operadores comparación. Vídeo 9</h2>";

echo "- ToDo Usar el metodo isset .<br>";

echo "- Ejemplo.<br><br><br>";

echo "<form action=\"09-validaciones.php\" method=\"post\" name=\"datos_usuario\" id=\"datos_usuario\">
  <table width=\"15%\" align=\"center\">
    <tr>
      <td>Nombre:</td>
      <td><label for=\"nombre_usuario\"></label>
      <input type=\"text\" name=\"nombre_usuario\" id=\"nombre_usuario\"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for=\"edad_usuario\"></label>
      <input type=\"text\" name=\"edad_usuario\" id=\"edad_usuario\"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"enviando\" id=\"enviando\" value=\"Enviar\"></td>
    </tr>
  </table>
</form>";
