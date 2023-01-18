<?php

namespace App\Http\Controllers;

use App\Http\Traits\IndexTrait;
use App\Models\EpisodeGroup;
use App\Models\Manga;
use DateTime;

class IndexController extends Controller
{
    use IndexTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mangasP = $this->mangasP(); //mangas populars
        $mangasPseinen = $this->mangasPseinen(); //mangas populars seinen
        $mangasPjosei = $this->mangasPjosei(); //mangas populars josei

        $mangasT = $this->mangasT(); //mangas en trending
        $mangasTseinen = $this->mangasTseinen(); //mangas en trending seinen
        $mangasTjosei = $this->mangasTjosei(); //mangas en trending josei

        $mangasNew = $this->mangasNew(); //mangas mas nuevos

        $episodesNew = $this->episodesNew(); //los episodes mas nuevos

        $mangasTopSemanal = $this->mangasTop('-7');
        $mangasTopMensual = $this->mangasTop('-30');
        return view('Index.index', [
            'mangasP' => $mangasP,
            'mangasPseinen' => $mangasPseinen,
            'mangasPjosei' => $mangasPjosei,
            'mangasT' => $mangasT,
            'mangasTseinen' => $mangasTseinen,
            'mangasTjosei' => $mangasTjosei,
            'mangasNew' => $mangasNew,
            'episodesNew' => $episodesNew,
            'mangasTopSemanal' => $mangasTopSemanal,
            'mangasTopMensual' => $mangasTopMensual,
        ]);
    }
}
