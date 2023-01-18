<?php

namespace App\Http\Traits;

use App\Models\EpisodeGroup;
use App\Models\Manga;


trait IndexTrait
{
    //funcion para obtener los mangas populars
    function mangasP()
    {
        return Manga::orderBy('view', 'desc')->take(12)->get();
    }
    function mangasPseinen()
    {
        return Manga::where('erotic', '=', '1')->orderBy('view', 'desc')->take(12)->get();
    }

    function mangasPjosei()
    {
        return Manga::where('demography', '=', 'Josei')->orderBy('view', 'desc')->take(12)->get();
    }

    //funcion para obtener los mangas en trendencias
    function mangasT()
    {
        return Manga::join('episodes', 'mangas.id', '=', 'episodes.manga_id')
            ->orderBy('mangas.view', 'desc')
            ->orderBy('episodes.view', 'desc')
            ->select('mangas.*')
            ->take(12)->get();
    }

    function mangasTseinen()
    {
        return Manga::join('episodes', 'mangas.id', '=', 'episodes.manga_id')
            ->where('mangas.erotic', '=', '1')
            ->orderBy('mangas.view', 'desc')
            ->orderBy('episodes.view', 'desc')
            ->select('mangas.*')
            ->take(12)->get();
    }

    function mangasTjosei()
    {
        return Manga::join('episodes', 'mangas.id', '=', 'episodes.manga_id')
            ->where('demography', '=', 'Josei')
            ->orderBy('mangas.view', 'desc')
            ->orderBy('episodes.view', 'desc')
            ->select('mangas.*')
            ->take(12)->get();
    }

    //funcion para obtener los mangas mas nuevos
    function mangasNew()
    {
        return Manga::orderBy('created_at', 'desc')->take(12)->get();
    }

    //funcion para obtener los episodes mas nuevos
    function episodesNew()
    {
        //now contiene la fecha actual
        return EpisodeGroup::where('date_publication', '<', now())->with('group')->with('episode')->with('manga')->orderBy('created_at', 'desc')->take(24)->get();
    }

    function mangasTop($days)
    {
        $mangasTop  = Manga::join('episodes', 'episodes.manga_id', '=', 'mangas.id')
            ->where('episodes.created_at', '>=', now()->addDays($days)->toDateTimeString())
            ->orderBy('mangas.view', 'desc')->orderBy('episodes.view', 'desc')
            ->orderBy('episodes.created_at', 'desc')
            ->take(10)->select('mangas.*')->get();
        return $mangasTop;
    }
}
