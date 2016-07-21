<?php

/**
 * Created by PhpStorm.
 * User: hernan
 * Date: 19/07/16
 * Time: 05:03 PM
 */
class Persona
{
    private $id;
    private $nombres;
    private $apellidos;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param mixed $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    protected  $edad;

    /**
     * Persona constructor.
     * @param $id
     * @param $nombres
     * @param $apellidos
     * @param $edad
     */


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
    private $salario;
    private $profesion;

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * @return mixed
     */
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * @param mixed $profesion
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;
    }

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
        echo "La edad fue asignada usanado el metodo creado en la superclase";
    }

}

/**
 * Class Alumno que hereda de persona, define nuevos atributos y nuevos metodos
 */
class Alumno extends Persona
{
    private $semestre;
    private $valorMatricula;
    private $promedioSemestre;

    public function __construct()
    {
        echo "-Instancia creada con constructor vacio.<br>";
    }

    /**
     * @return mixed
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * @param mixed $semestre
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;
    }

    /**
     * @return mixed
     */
    public function getValorMatricula()
    {
        return $this->valorMatricula;
    }

    /**
     * @param mixed $valorMatricula
     */
    public function setValorMatricula($valorMatricula)
    {
        $this->valorMatricula = $valorMatricula;
    }

    /**
     * @return mixed
     */
    public function getPromedioSemestre()
    {
        return $this->promedioSemestre;
    }

    /**
     * @param mixed $promedioSemestre
     */
    public function setPromedioSemestre($promedioSemestre)
    {
        $this->promedioSemestre = $promedioSemestre;
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