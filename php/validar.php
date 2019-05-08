<?php

function validarTexto($valor)
{
    if (trim($valor) == '') {
        return false;
    } else {
        return true;
    }
}

function validarEntero($valor, $opciones)
{
    if (filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE) {
        return false;
    } else {
        return true;
    }
}

function validarEmail($valor)
{
    if (filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE) {
        return false;
    } else {
        return true;
    }
}
