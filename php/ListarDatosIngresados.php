<?php

include('./clases.php');

function ListarAlumnos()
{
    $Alumnos = new ArrayObject();
    if (is_file('../archivos-serializacion/SerializacionAlumnos.txt')) {
        $deserializar = file_get_contents('../archivos-serializacion/SerializacionAlumnos.txt');
        $Alumnos = unserialize($deserializar);
    } else {
        print("<p class='lead'>No hay datos de alumnos para mostrar</p>");
        header('Location:./MostrarDatosIngresados.php');
    }

    $i = 1;

    print("<div class='table-responsive'>");
    print("<table class='table'>");
    print("<thead>");
    print("<tr>");
    print("<th scope='col'>#</th>");
    print("<td> Correo </td>");
    print("<td> Nombre </td>");
    print("<td> Carnet </td>");
    print("<td> Edad </td>");
    print("<td> Curso </td>");
    print("<td> Foto </td>");
    print("<td> <button type='button' class='btn btn-success'>Editar</button>
                <button type='button' class='btn btn-danger'>Eliminar</button> 
           <td>");
    print("</tr>");
    print("</thead>");
    print("<tbody>");
    foreach ($Alumnos as $alumno) {
        // poner funcionar para extraer los campos
        print("<tr>");
        print("<th scope='row'>" . $i . "</th>");
        print("<td>" . $alumno->correo . "</td>");
        print("<td>" . $alumno->nombre . "</td>");
        print("<td>" . $alumno->carnet . "</td>");
        print("<td>" . $alumno->edad . "</td>");
        print("<td>" . $alumno->curso . "</td>");
        print("<td> <img class='imagen-alumno' src='" . $alumno->foto . "'/></td>");
        print("</tr>");
        $i++;
    }

    print("</tbody>");
    print("</table>");
    print("</div>");
}


function ListarProfesores()
{
    if (is_file('../archivos-serializacion/SerializacionProfesores.txt')) {
        $Profesores = new ArrayObject();
        $deserializar = file_get_contents('../archivos-serializacion/SerializacionProfesores.txt');
        $Profesores = unserialize($deserializar);
    } else {
        print("<p class='lead'>No hay datos de profesores para mostrar</p>");
        header('Location:./MostrarDatosIngresados.php');
    }

    $i = 1;

    print("<div class='table-responsive'>");
    print("<table class='table'>");
    print("<thead>");
    print("<tr>");
    print("<th scope='col'>#</th>");
    print("<td> Clave </td>");
    print("<td> Nombre </td>");
    print("<td> Estado civil </td>");
    print("<td> Curriculum </td>");
    print("</tr>");
    print("</thead>");
    print("<tbody>");
    foreach ($Profesores as $profesor) {
        // poner funcionar para extraer los campos
        print("<tr>");
        print("<th scope='row'>" . $i . "</th>");
        print("<td>" . $profesor->clave . "</td>");
        print("<td>" . $profesor->nombre . "</td>");
        print("<td>" . $profesor->ecivil . "</td>");
        print("<td>" . $profesor->cv . "</td>");
        print("</tr>");
        $i++;
    }

    print("</tbody>");
    print("</table>");
    print("</div>");
}


function ListarAulas()
{
    if (is_file('../archivos-serializacion/SerializacionAulas.txt')) {
        $Aulas = new ArrayObject();
        $deserializar = file_get_contents('../archivos-serializacion/SerializacionAulas.txt');
        $Aulas = unserialize($deserializar);
    } else {
        print("<p class='lead'>No hay datos de profesores para mostrar</p>");
        exit(0);
    }

    $i = 1;

    print("<div class='table-responsive'>");
    print("<table class='table'>");
    print("<thead>");
    print("<tr>");
    print("<th scope='col'>#</th>");
    print("<td> Clave </td>");
    print("<td> Nombre </td>");
    print("</tr>");
    print("</thead>");
    print("<tbody>");
    foreach ($Aulas as $aula) {
        // poner funcionar para extraer los campos
        print("<tr>");
        print("<th scope='row'>" . $i . "</th>");
        print("<td>" . $aula->naula . "</td>");
        print("<td>" . $aula->cap . "</td>");
        print("</tr>");
        $i++;
    }

    print("</tbody>");
    print("</table>");
    print("</div>");
}
