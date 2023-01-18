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

use App\Models\GroupManga;
use App\Models\GroupUser;

function sentidoDeLectura($type) //muestra las fechas de que sentido se lee el episodio
{
    if ($type === 'Manhwa' || $type === 'Manhua') {
        return 'fa-arrow-right';
    } else {
        return 'fas fa-arrow-left';
    }
}

function sentido($type) //si es manga la rectura sea de derecha a derecha, y si es de manhwa es de izquierda para que muestre como leer el capitulo
{
    return $type === 'Manhwa' || $type === 'Manhua' ?
        __('izquierda') : __('derecha');
}

function sentidoCapitulo($capitulo) //es para mostrar el icono para capitulo siguiente o anterior
{
    return $capitulo === 'Cap. Anterior' ? 'fa-backward' : 'fa-forward';
}
