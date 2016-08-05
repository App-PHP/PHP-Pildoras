
<h3>Registro de Persona</h3>
<form name="form1" method="get" action="<?php $_SERVER["PHP_SELF"] ?>" class="form-horizontal">

    <div class="form-group">
        <label for="tipoID" class="col-sm-3 control-label">Tipo ID</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="tipoID" name="tipoID" placeholder="Seleccione una opcion">
        </div>
    </div>

    <div class="form-group">
        <label for="numeroID" class="col-sm-3 control-label">Número ID</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="numeroID" name="numeroID"
                   placeholder="Ingrese numero de identificación">
        </div>
    </div>

    <div class="form-group">
        <label for="apellido1" class="col-sm-3 control-label">Primer Apellido</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="apellido1" name="apellido1"
                   placeholder="ingrese primer apellido">
        </div>
    </div>

    <div class="form-group">
        <label for="apellido2" class="col-sm-3 control-label">Segundo Apellido</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="apellido2" name="apellido2"
                   placeholder="ingrese segundo apellido">
        </div>
    </div>

    <div class="form-group">
        <label for="nombre1" class="col-sm-3 control-label">Primer Nombre</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="nombre1" name="nombre1" placeholder="Ingrese primer nombre">
        </div>
    </div>

    <div class="form-group">
        <label for="nombre2" class="col-sm-3 control-label">Segundo Nombre</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="nombre2" name="nombre2" placeholder="Ingrese segundo nombre">
        </div>
    </div>

    <div class="form-group">
        <label for="sexo" class="col-sm-3 control-label">Sexo</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Ingrese F o M">
        </div>
    </div>

    <div class="form-group">
        <label for="fechaNacimiento" class="col-sm-3 control-label">Fecha Nacimiento</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="fechaNacimiento" name="fechaNacimiento"
                   placeholder="Ingrese la fecha de nacimiento">
        </div>
    </div>

    <div class="form-group">
        <label for="edad" class="col-sm-3 control-label">Edad</label>
        <div class="col-sm-4">
            <input class="form-control" type="number" id="edad" name="edad" placeholder="Ingrese la edad">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-4">
            <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="reset" name="limpiar" value="Limpiar" class="btn btn-danger btn-sm">
        </div>
    </div>

</form>
