<?php

/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 19/07/16
 * Time: 05:03 PM
 */
class Persona
{
    var $id;
    var $nombres;
    var $apellidos;
    var $edad;

    /**
     * Persona constructor.
     * @param $id
     * @param $nombres
     * @param $apellidos
     * @param $edad
     */
    public function __construct($id, $nombres, $apellidos, $edad)
    {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        echo "Instancia creada correstamente con sus campos.<br>";
    }

    function mostrarEdad()
    {
        echo "la edad es " . $this->edad;
    }

    function asignarId($id)
    {
        $this->id = $id;
        echo "El Id fue asignado. Su nuevo valor es " . $this->id . "<br>";
    }

}

/**
 * Class Profesor hereda de persona, implementa la sobreescritura de un metodo
 */
class Profesor extends Persona
{
    var $salario;
    var $profesion;

    function asignarSalario($salario)
    {
        $this->salario = $salario;
        echo "El salario fue asignado. Su nuevo valor es " . $this->salario;
    }

    //reescritura de metodos

    /**
     * metodo que sobreescribe el metodo de la clase padre.
     */
    function mostrarEdad()
    {
        echo "La edad del profesor es " . $this->edad . "<br>";
    }

    /** metodo que ejecuta primero el metodo creado en la clase padre y despues ejecuta acciones del metodo propio
     * @param $id
     */
    function asignarId($id)
    {
        parent::asignarId($id);
        echo "La edad fue asignada usando el metodo creado en la superclase";
    }

}

/**
 * Class Alumno que hereda de persona, define nuevos atributos y nuevos metodos
 */
class Alumno extends Persona
{
    private $semestre;
    var $valorMatricula;
    var $promedioSemestre;

    public function __construct()
    {
        echo "-Instancia creada con constructor vacio.<br>";
    }

    function cambiarSemestre($nuevoSemestre)
    {
        $this->semestre = $nuevoSemestre;
        echo "Semestre cambiado correstamente. Nuevo valor " . $this->semestre . ".<br>";
    }

    function mostrarSemestre()
    {
        echo "El valor en Semestre es " . $this->semestre . ".<br>";
    }


}