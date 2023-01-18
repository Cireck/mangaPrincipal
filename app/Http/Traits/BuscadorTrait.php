<?php

namespace App\Http\Traits;

use App\Models\Episode;
use App\Models\Gender;
use App\Models\GroupUser;
use App\Models\Manga;
use App\Models\MangaUser;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;


trait BuscadorTrait
{
    //funcion para obtener mangas que sean del mismo generos
    function mangasGenders($genders, $query)
    {

        $consulta =  $query->join('gender_manga', 'gender_manga.manga_id', '=', 'mangas.id');
        foreach ($genders as $gender) {
            $consulta = $consulta->orWhere('gender_manga.gender_id', '=', $gender);
        }

        return $consulta;
    }
    //funcion para obtener mangas que no sean los generos que se desean buscadar
    function mangasExcludeGenders($excludeGenders, $query, $genders)
    {

        $consulta = $query;
        if (!empty($genders)) {
            foreach ($excludeGenders as $genderExclude) {
                $consulta = $consulta->where('gender_manga.gender_id', '!=', $genderExclude);
            }
        } else {
            $consulta =  $query->join('gender_manga', 'gender_manga.manga_id', '=', 'mangas.id');
            foreach ($excludeGenders as $genderExclude) {
                $consulta = $consulta->where('gender_manga.gender_id', '!=', $genderExclude);
            }
        }


        return $consulta;
    }
    function mangasTranslationStatus($translationStatus, $query)
    {

        $consulta = $query;
        $consulta =  $query->join('group_manga', 'group_manga.manga_id', '=', 'mangas.id')->where('group_manga.state', '=', $translationStatus);
        return $consulta;
    }

    function mangasOrder($order, $orderList, $query)
    {

        $consulta = $query;
        if ($order == 'alphabetically') {
            $consulta =  $query->orderBy('name', $orderList);
        } elseif ($order == 'score') {
            $consulta =  $query->orderBy('score', $orderList);
        } elseif ($order == 'release_date') {
            $consulta =  $query->orderBy('created_at', $orderList);
        } else {
            $consulta =  $query->orderBy('created_at', $orderList);
        }

        return $consulta;
    }
}
