<?php
//archivo para crear funciones y utlizaras en el vista o en los archivos blade
//para usar este archivo hay que ir al archivo composer.json en la parte de autoload poner esto, despues delr-/su funcion es cargar los archivos que vayamos a utilizar en proyecto
/*
lep/helpers.ph */
//despues de agregar la linea de codigo, hay que usar el cmd para cargar los archivos composer de nuevo para actualizar
//dentro de la carpeta del proyecto usar el comando
//composer dumpautoload

use Illuminate\Support\Facades\Request;

//funcion para dar el bg de type del group
function typeGroupBg($type)
{
    if ($type === 'Scanlation') {
        $bg = 'bg-scanlation';
    } elseif ($type === 'Uploader') {
        $bg = 'bg-uploader';
    } elseif ($type === 'Amateur') {
        $bg = 'bg-amateur';
    } else {
        $bg = '';
    }
    return $bg;
}
