<?php

namespace App\Http\Traits;

use App\Models\Episode;
use App\Models\EpisodeGroup;
use App\Models\MangaUser;

trait MangaTrait
{

    function consultaTotalLike($mangaId)
    {
        $consultaLike = MangaUser::where('manga_id', '=', $mangaId)->count('manga_id');
        return $consultaLike;
    }

    function consultaLike($mangaId)
    {
        $consultaLike = MangaUser::where('manga_id', '=', $mangaId)
            ->where('like', '=', '1')->count('manga_id');
        return $consultaLike;
    }

    function consultaDislike($mangaId)
    {
        $consultaLike = MangaUser::where('manga_id', '=', $mangaId)
            ->where('like', '=', '0')->count('manga_id');
        return $consultaLike;
    }

    function porcentajeLike($mangaId)
    {
        $totalLike = $this->consultaTotalLike($mangaId);
        $like = $this->consultaLike($mangaId);
        if ($totalLike > 0 && $like > 0) {
            $poncetaje = number_format($like * 100 / $totalLike, 2);
            return $poncetaje;
        } else {
            return 0;
        }
    }

    function porcentajeDislike($mangaId)
    {
        $totalLike = $this->consultaTotalLike($mangaId);
        $like = $this->consultaDislike($mangaId);
        if ($totalLike > 0 && $like > 0) {
            $poncetaje = number_format($like * 100 / $totalLike, 2);
            return $poncetaje;
        } else {
            return 0;
        }
    }

    function totalItmensPedding($mangaId, $itemsPending)
    {
        $consulta = MangaUser::where('manga_id', '=', $mangaId)
            ->where('type', '=', $itemsPending)->count('manga_id');
        $tamaño = strlen($consulta);
        if ($tamaño === 4) {
            return substr($consulta, 0, 1) . 'K';
        } elseif ($tamaño === 5) {
            return substr($consulta, 0, 2) . 'K';
        } elseif ($tamaño === 6) {
            return substr($consulta, 0, 3) . 'K';
        } elseif ($tamaño === 7) {
            return substr($consulta, 0, 1) . 'KK';
        } elseif ($tamaño === 8) {
            return substr($consulta, 0, 2) . 'KK';
        } elseif ($tamaño === 9) {
            return substr($consulta, 0, 3) . 'KK';
        } elseif ($tamaño === 10) {
            return substr($consulta, 0, 1) . 'KKK';
        } elseif ($tamaño === 11) {
            return substr($consulta, 0, 2) . 'KKK';
        } elseif ($tamaño === 12) {
            return substr($consulta, 0, 3) . 'KKK';
        } elseif ($tamaño === 13) {
            return substr($consulta, 0, 1) . 'KKKK';
        } elseif ($tamaño === 14) {
            return substr($consulta, 0, 2) . 'KKKK';
        } elseif ($tamaño === 15) {
            return substr($consulta, 0, 3) . 'KKKK';
        } else {
            return $consulta;
        }
    }

    //
    function userManga($mangaId, $user_id)
    {
        $consulta = MangaUser::where('manga_id', '=', $mangaId)
            ->where('user_id', '=', $user_id)->take(1)->get();
        foreach ($consulta as $userManga1) {
            $userManga = $userManga1;
        }
        if (empty($userManga)) {
            $userManga = new MangaUser();
            $userManga->user_id = $user_id;
            $userManga->manga_id = $mangaId;
            $userManga->save();
            return $userManga;
        } else {
            return $userManga;
        }
    }

    //obtener el episode del ultimo que ha leido el user
    function lastEpisode($mangaId, $lastEpisode)
    {
        $consulta = Episode::where('manga_id', '=', $mangaId)
            ->where('episode', '=', $lastEpisode)->take(1)->get();
        foreach ($consulta as $episode) {
            $episode = $episode;
        }
        if (empty($episode)) {
            return [];
        } else {
            return $episode;
        }
    }

    //para obtener los episodes publicados hasta la fecha actual que se haga la consulta
    function episodes($mangaId)
    {

        $episodes = Episode::with('groups')->join('episode_group', 'episode_group.episode_id', '=', 'episodes.id')
            ->where('episodes.manga_id', '=', $mangaId)
            ->where('episode_group.date_publication', '<', now()) //now contiene la fecha actual
            ->select('episodes.*')->get();
        return $episodes = $episodes->unique('episode');
    }
}
