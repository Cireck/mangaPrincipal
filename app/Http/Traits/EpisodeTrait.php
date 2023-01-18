<?php

namespace App\Http\Traits;

use App\Models\Episode;
use App\Models\MangaUser;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

trait EpisodeTrait
{
    //funcion para realizar la consulta de episode anterior y siguiente, para el episode actual
    function episodePagination($mangaId, $episode, $groupId, $episodePagination, $order)
    {
        $consultaEpisode = Episode::with('groups')
            ->where('manga_id', '=', $mangaId)
            ->where('episode', "$episodePagination", $episode)->orderBy('id', "$order")->take(1)->get();

        if (empty(!$consultaEpisode)) {
            foreach ($consultaEpisode as $episode1) {
                foreach ($episode1->groups as $group1) {
                    if ($group1->id === $groupId) {
                        $episodeGroup = $group1->pivot->id;
                        return $episodeGroup;
                        break;
                    } else {
                        $episodeGroup = $group1->pivot->id;
                        return $episodeGroup;
                        break;
                    }
                }
            }
        }
    }

    /*funcion para hacer la paginacion de el episode contando las imagenes que tenga
el directorio para saber el total de paginas que tendra la paginacion
*/
    function paginationEpisode($mangaId, $episodeGroupId)
    {
        $directorio =  'public/Manga/' . $mangaId . '/' . $episodeGroupId . '';
        // obtén los arrays de archivos y directorios que estén ubicados ahí
        $archivos_array = Storage::disk('local')->allFiles($directorio);
        $total =  count($archivos_array);
        $pageName = 'p';
        $page = Paginator::resolveCurrentPage($pageName);
        $pagination =  new LengthAwarePaginator([], $total, $perPage = 1, $page, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => $pageName,
        ]);
        return $pagination;
    }
    /*se obtiene el total de archivos del directorio para mostrar las imagenes
*/
    function countArchivos($mangaId, $episodeGroupId)
    {
        $directorio =  'public/Manga/' . $mangaId . '/' . $episodeGroupId . '';
        // obtén los arrays de archivos y directorios que estén ubicados ahí
        $archivos_array = Storage::disk('local')->allFiles($directorio);
        return $total =  count($archivos_array);
    }
}
