<?php

namespace App\Http\Controllers;

use App\Models\Episode;

use App\Models\EpisodeGroup;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class NewEpisodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newEpisodes(Request $request)
    {
        $page = $request->page; //recupera la pagina
        $date = new DateTime('now');
        $episodesNew = EpisodeGroup::where('date_publication', '<', $date)->with('group')->with('episode')->with('manga')->orderBy('created_at', 'desc')->take(600)->get();
        $episodes = new lengthAwarePaginator($episodesNew->forPage($page, 30), count($episodesNew), 30, $currentPage = null, $options = ['path' => $request->url(), 'query' => $request->query()]); //para hacer una propia paginacion personal
        return view('NewEpisodes.index', [
            'episodesNew' => $episodes,
        ]);
    }
}
