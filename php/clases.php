<?php
class Alumno
{
    public $correo;
    public $nombre;
    public $carnet;
    public $edad;
    public $curso;
    public $foto;

    public function __construct($arg_correo = "", $arg_nombre = "", $arg_carnet = "", $arg_edad = "", $arg_curso = "", $arg_foto = "")
    {
        $this->correo = $arg_correo;
        $this->nombre = $arg_nombre;
        $this->carnet = $arg_carnet;
        $this->edad = $arg_edad;
        $this->curso = $arg_curso;
        $this->foto = $arg_foto;
    }

    public function imprimir()
    {
        echo "Correo Electronico: $this->correo <br/>";
        echo "Nombre: $this->nombre <br/>";
        echo "Numero de Carnet: $this->carnet <br/>";
        echo "Edad: $this->edad <br/>";
        echo "Curso Actual: $this->curso <br/>";
        echo "Foto: $this->foto <br/>";
    }

    function __destruct()
    { }
}

class Profesor
{

    public $clave;
    public $nombre;
    public $ecivil;
    public $cv;

    public function __construct($arg_clave = "", $arg_nombre = "", $arg_ecivil = "", $arg_cv = "")
    {
        $this->clave = $arg_clave;
        $this->nombre = $arg_nombre;
        $this->ecivil = $arg_ecivil;
        $this->cv = $arg_cv;
    }

    public function imprimir()
    {
        echo "Correo Electronico: $this->clave <br/>";
        echo "Nombre: $this->nombre <br/>";
        echo "Numero de Carnet: $this->ecivil <br/>";
        echo "Edad: $this->cv <br/>";
    }

    function __destruct()
    { }
}

class Aula
{

    public $naula;
    public $cap;

    public function __construct($arg_naula = "", $arg_cap = "")
    {
        $this->naula = $arg_naula;
        $this->cap = $arg_cap;
    }

    public function imprimir()
    {
        echo "Numero de Aula: $this->naula <br/>";
        echo "Capacidad: $this->cap <br/>";
    }

    function __destruct()
    { }
}
