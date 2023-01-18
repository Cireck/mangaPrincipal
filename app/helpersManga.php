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

function typeManga($type)
{
    if ($type === 'Manga') {
        return 'bg-manga';
    } elseif ($type === 'Manhwa') {
        return 'bg-manhwa';
    } elseif ($type === 'Manhua') {
        return 'bg-manhua';
    } elseif ($type === 'Novela') {
        return 'bg-novela';
    } elseif ($type === 'One shot') {
        return 'bg-one_shot';
    } elseif ($type === 'Doujinshi') {
        return 'bg-doujinshi';
    } elseif ($type === 'Oel') {
        return 'bg-oel';
    } else {
        return '';
    }
}

function demographyManga($demography)
{
    if ($demography === 'Seinen') {
        return 'seinen';
    } elseif ($demography === 'Shoujo') {
        return 'shoujo';
    } elseif ($demography === 'Shounen') {
        return 'shounen';
    } elseif ($demography === 'Josei') {
        return 'josei';
    } elseif ($demography === 'Kodomo') {
        return 'kodomo';
    } else {
        return '';
    }
}

function demographyDescription($demography)
{
    if ($demography === 'Seinen') {
        return 'dirigido a hombres jóvenes y adultos';
    } elseif ($demography === 'Shoujo') {
        return 'dirigido a chicas adolescentes';
    } elseif ($demography === 'Shounen') {
        return 'dirigido a chicos adolescentes';
    } elseif ($demography === 'Josei') {
        return 'dirigido a mujeres jóvenes y adultas';
    } elseif ($demography === 'Kodomo') {
        return 'dirigido a niños pequeños';
    } else {
        return '';
    }
}

function itemPending($itemPending, $barItem)
{
    if ($itemPending === 'watch' && $barItem === 'watch') {
        return 'active';
    } elseif ($itemPending === 'pending' && $barItem === 'pending') {
        return 'active';
    } elseif ($itemPending === 'follow' && $barItem === 'follow') {
        return 'active';
    } elseif ($itemPending === 'wish' && $barItem === 'wish') {
        return 'active';
    } elseif ($itemPending === 'have' && $barItem === 'have') {
        return 'active';
    } elseif ($itemPending === 'abandoned' && $barItem === 'abandoned') {
        return 'active';
    } else {
        return 'unchecked';
    }
}

function state($state)
{
    if ($state === 'Publicándose') {
        return 'publishing';
    } elseif ($state === 'Terminado') {
        return 'ended';
    } elseif ($state === 'Abandonado') {
        return 'cancelled';
    } elseif ($state === 'Pausado') {
        return 'on_hold';
    } else {
        return '';
    }
}

function countFollowGroup($idGroup)
{
    $total = GroupUser::where('group_id', '=', $idGroup)
        ->where('follow', '=', '1')->count('group_id');
    return $total;
}

function typeGroup($typeGroup)
{
    if ($typeGroup === 'Scanlation') {
        return 'badge-scanlation';
    } elseif ($typeGroup === 'Uploader') {
        return 'badge-uploader';
    } elseif ($typeGroup === 'Amateur') {
        return 'badge-amateur';
    } else {
        return '';
    }
}

function statusMangaGroup($state)
{
    if ($state === 'Terminado') {
        return 'finished';
    } elseif ($state === 'Abandonado') {
        return 'abandoned';
    } elseif ($state === 'Activo') {
        return 'active';
    } else {
        return '';
    }
}

function consultaMangaGroup($mangaId, $groupId)
{
    $consulta = GroupManga::where('manga_id', '=', $mangaId)->where('group_id', '=', $groupId)->get();
    foreach ($consulta as $group) {
        return $group->state;
    }
}
