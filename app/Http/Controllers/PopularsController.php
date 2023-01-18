<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Symfony\Component\Console\Input\Input;
use Illuminate\Pagination\LengthAwarePaginator;

class PopularsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function populars(Request $request)
    {
        $page = $request->page; //recupera la pagina
        $mangasP = Manga::orderBy('view', 'desc')->take(300)->get();
        $mangas = new lengthAwarePaginator($mangasP->forPage($page, 30), count($mangasP), 30, $currentPage = null, $options = ['path' => $request->url(), 'query' => $request->query()]); //para hacer una propia paginacion peronal
        return view('populars.popurals', [
            'mangas' => $mangas,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function popularsSeinen(Request $request)
    {
        $page = $request->page;
        $mangasPseinen = Manga::where('erotic', '=', '1')->orderBy('view', 'desc')->take(300)->get();
        $mangas = new lengthAwarePaginator($mangasPseinen->forPage($page, 30), count($mangasPseinen), 30, $currentPage = null, $options = ['path' => $request->url(), 'query' => $request->query()]);
        return view('populars.popurals', [
            'mangas' => $mangas,

        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function popularsJosei(Request $request)
    {
        $page = $request->page;
        $mangasPjosei = Manga::where('demography', '=', 'Josei')->orderBy('view', 'desc')->take(300)->get();
        $mangas = new lengthAwarePaginator($mangasPjosei->forPage($page, 30), count($mangasPjosei), 30, $currentPage = null, $options = ['path' => $request->url(), 'query' => $request->query()]);
        return view('populars.popurals', [
            'mangas' => $mangas,
        ]);
    }
}
