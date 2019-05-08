<?php

include('clases.php');
include('validar.php');



function ProcesarDatosDeAlumno()
{

    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $carnet = $_POST['carnet'];
    $edad = $_POST['edad'];
    $curso = $_POST['curso'];
    $foto = $_POST['foto'];

    $alumno = new Alumno($email, $nombre, $carnet, $edad, $curso, $foto);

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
        move_uploaded_file(
            $_FILES['foto']['tmp_name'],
            $nombreDirectorio . $nombreFichero
        );
    } else
        print("No se ha podido subir el fichero\n");


    // $Alumnos->append($alumno);
    // for each($Alumnos as $alumno)
    //     $alumno->imprimir();

    // SERIALIZAR AQUI
}

function ProcesarDatosProfesor()
{
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $ecivil = $_POST['estado-civil'];
    $cv = $_POST['curriculum'];
    $errores = array();

    $profesor = new Profesor($clave, $nombre, $ecivil, $cv);

    if (!validarTexto($nombre)) {
        $errores = "Ingrese correctamente su nombre";
    }

    if (is_uploaded_file($_FILES['curriculum']['tmp_name'])) {
        $nombreDirectorio = "../cv/";
        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $_FILES['curriculum']['name'];
        move_uploaded_file(
            $_FILES['curriculum']['tmp_name'],
            $nombreDirectorio . $nombreFichero
        );
    } else
        print("No se ha podido subir el fichero\n");
}

function ProcesarDatosAula()
{
    $naula = $_POST['numero-aula'];
    $cap = $_POST['capacidad'];
    $errores = array();

    $aula = new Aula($naula, $cap);

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
}

// validacion de Alumno 
if (isset($_POST['submit-alumno']))
    ProcesarDatosDeAlumno();

// Validacion de Profesor
if (isset($_POST['submit-profesor']))
    ProcesarDatosProfesor();

if (isset($_POST['submit-aula']))
    ProcesarDatosAula();

// Validacion de Aula
