<?php
include('clases.php');
include('validar.php');

function ProcesarDatosDeAlumno()
{
    $Alumnos = new ArrayObject();
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $carnet = $_POST['carnet'];
    $edad = $_POST['edad'];
    $curso = $_POST['curso'];
    $foto = $_FILES['foto']['name'];
    $fotoRuta = "";
    
    $errores = array();
    $opciones_edad = array(
        'options' => array(
            'min_range' => 15,
            'max_range' => 50
        )
    );

    $opciones_curso = array(
        'options' => array(
            'min_range' => 1,
            'max_range' => 5
        )
    );

    if (!validarTexto($nombre)) {
        $errores = "Ingrese correctamente su nombre";
    }

    if (!validarTexto($carnet)) {
        $errores = "Ingrese correctamente el carnet";
    }

    if (!validarEmail($email)) {
        $errores = "Ingrese correctamente su correo";
    }

    if (!validarEntero($edad, $opciones_edad)) {
        $errores = "Ingrese correctamente su edad";
    }

    if (!validarEntero($curso, $opciones_curso)) {
        $errores = "Ingrese correctamente el curso";
    }


    foreach ($errores as $error) {
        print("Error: $error");
    }

    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $nombreDirectorio = "../img/";
        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $nombreDirectorio . $nombreFichero);
        $fotoRuta = $nombreDirectorio . $nombreFichero;
    } else
        print("No se ha podido subir el fichero\n");

    $alumno = new Alumno($email, $nombre, $carnet, $edad, $curso, $fotoRuta);

    if (is_file('../archivos-serializacion/SerializacionAlumnos.txt')) {
        $deserializar = file_get_contents('../archivos-serializacion/SerializacionAlumnos.txt');
        $Alumnos = unserialize($deserializar);
        $Alumnos->append($alumno);
        $serializar = serialize($Alumnos);
        file_put_contents('../archivos-serializacion/SerializacionAlumnos.txt', $serializar);
    } else {
        $Alumnos->append($alumno);
        $serializar = serialize($Alumnos);
        file_put_contents('../archivos-serializacion/SerializacionAlumnos.txt', $serializar);
    }

    header('Location:../index.php');
}

function ProcesarDatosProfesor()
{
    $Profesores = new ArrayObject();
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $ecivil = $_POST['estado-civil'];
    $cv = $_POST['curriculum'];
    $cvRuta = '';
    $errores = array();

    $profesor = new Profesor($clave, $nombre, $ecivil, $cv);

    if (!validarTexto($nombre)) {
        $errores = "Ingrese correctamente su nombre";
    }

    if (is_uploaded_file($_FILES['curriculum']['tmp_name'])) {
        $nombreDirectorio = "../cv/";
        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $_FILES['curriculum']['name'];
        move_uploaded_file($_FILES['curriculum']['tmp_name'], $nombreDirectorio . $nombreFichero);
    } else
        print("No se ha podido subir el fichero\n");


    if (is_file('../archivos-serializacion/SerializacionProfesores.txt')) {
        $deserializar = file_get_contents('../archivos-serializacion/SerializacionProfesores.txt');
        $Profesores = unserialize($deserializar);
        $Profesores->append($profesor);
        $serializar = serialize($Profesores);
        file_put_contents('../archivos-serializacion/SerializacionProfesores.txt', $serializar);
    } else {
        $Profesores->append($profesor);
        $serializar = serialize($Profesores);
        file_put_contents('../archivos-serializacion/SerializacionProfesores.txt', $serializar);
    }

    header('Location:../index.php');
}

function ProcesarDatosAula()
{
    $Aulas = new ArrayObject();
    $naula = $_POST['numero-aula'];
    $cap = $_POST['capacidad'];
    $errores = array();

    $opciones_capacidad = array(
        'options' => array(
            'min_range' => 1,
            'max_range' => 50
        )
    );

    if (!validarTexto(naula)) {
        $errores = "Ingrese correctamente el numero de aula";
    }

    if (!validarEntero($cap, $opciones_capacidad)) {
        $errores = "Ingrese correctamente la capacidad del aula";
    }

    $aula = new Aula($naula, $cap);

    if (is_file('../archivos-serializacion/SerializacionAulas.txt')) {
        $deserializar = file_get_contents('../archivos-serializacion/SerializacionAulas.txt');
        $Aulas = unserialize($deserializar);
        $Aulas->append($aula);
        $serializar = serialize($Aulas);
        file_put_contents('../archivos-serializacion/SerializacionAulas.txt', $serializar);
    } else {
        $Aulas->append($aula);
        $serializar = serialize($Aulas);
        file_put_contents('../archivos-serializacion/SerializacionAulas.txt', $serializar);
    }

    header('Location:../index.php');
}

// validacion de Alumno 
if (isset($_POST['submit-alumno']))
    ProcesarDatosDeAlumno();

// Validacion de Profesor
if (isset($_POST['submit-profesor']))
    ProcesarDatosProfesor();

// Validacion de Aula
if (isset($_POST['submit-aula']))
    ProcesarDatosAula();
