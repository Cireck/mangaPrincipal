<?php

namespace App\Http\Controllers;

use App\Http\Traits\EpisodeTrait;
use App\Http\Traits\MangaTrait;
use App\Models\EpisodeGroup;
use Illuminate\Http\Request;

class ViewEpisodeController extends Controller
{
    use EpisodeTrait;
    use MangaTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paginate(EpisodeGroup $episodeGroup)
    {
        //variables
        $manga = $episodeGroup->episode->manga;
        $episode = $episodeGroup->episode;
        $group = $episodeGroup->group;
        //variables de episode anterior o siguiente si hay de episode actual y que sea del mismo group
        $episodePrevious = $this->episodePagination($manga->id, $episode->episode, $group->id, '<', 'desc');
        $episodeFollowing = $this->episodePagination($manga->id, $episode->episode, $group->id, '>', 'asc');
        $pagination = $this->paginationEpisode($manga->id, $episodeGroup->id);
        if (auth()->user()) { //para actualizar el ultimo capitulo del manga que ha leido el user
            $mangaUser = $this->userManga($manga->id, auth()->user()->id);
            if ($episode->episode > $mangaUser->last_episode) {
                $mangaUser->last_episode = $episode->episode;
                $mangaUser->save();
            }
        }

        return view('viewEpisode.paginate', [
            'episodeGroup' => $episodeGroup,
            'manga' => $manga,
            'episode' => $episode,
            'group' => $group,
            'episodePrevious' => empty($episodePrevious) ? '' : $episodePrevious,
            'episodeFollowing' => empty($episodeFollowing) ? '' : $episodeFollowing,
            'pagination' => $pagination,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cascade(EpisodeGroup $episodeGroup)
    {
        //variables
        $manga = $episodeGroup->episode->manga;
        $episode = $episodeGroup->episode;
        $group = $episodeGroup->group;
        //variables de episode anterior o siguiente si hay de episode actual y que sea del mismo group
        $episodePrevious = $this->episodePagination($manga->id, $episode->episode, $group->id, '<', 'desc');
        $episodeFollowing = $this->episodePagination($manga->id, $episode->episode, $group->id, '>', 'asc');
        //el total de imagenes del episode ha mostrar
        $countArchivos = $this->countArchivos($manga->id, $episodeGroup->id);
        if (auth()->user()) { //para actualizar el ultimo capitulo del manga que ha leido el user
            $mangaUser = $this->userManga($manga->id, auth()->user()->id);
            if ($episode->episode > $mangaUser->last_episode) {
                $mangaUser->last_episode = $episode->episode;
                $mangaUser->save();
            }
        }
        return view('viewEpisode.cascade', [
            'episodeGroup' => $episodeGroup,
            'manga' => $manga,
            'episode' => $episode,
            'group' => $group,
            'episodePrevious' => empty($episodePrevious) ? '' : $episodePrevious,
            'episodeFollowing' => empty($episodeFollowing) ? '' : $episodeFollowing,
            'countArchivos' => $countArchivos,
        ]);
    }
}
