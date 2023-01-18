<?php
//archivo para crear funciones y utlizaras en el vista o en los archivos blade
//para usar este archivo hay que ir al archivo composer.json en la parte de autoload poner esto, despues del "psr-4"
//su funcion es cargar los archivos que vayamos a utilizar en proyecto
/*
,"files": ["app/helpers.php"]
 */
//despues de agregar la linea de codigo, hay que usar el cmd para cargar los archivos composer de nuevo para actualizar
//dentro de la carpeta del proyecto usar el comando
//composer dumpautoload

function suma($i)
{
    $suma = $i + 1;
    return $suma;
}
