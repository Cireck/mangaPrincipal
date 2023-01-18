<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\EpisodeGroup;
use App\Models\Group;
use App\Models\GroupManga;
use App\Models\GroupUser;
use App\Models\Manga;
use App\Models\MangaUser;
use App\Models\Profile;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PruebasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* $group=User::with('mangas')->get();
        dump($group);
        foreach ($group as $prueba) {

        echo $prueba->id.'<br/>';
        echo $prueba->name.'<br/>';

        $mangas = $prueba->mangas;//se obtiene todos los mangas que tenga asignado el user
        $userManga = $prueba->mangas()->wherePivot('type','=','following')->get();//para obtener los mangas del user si solo esta leyendo o seguiendo , etc.
        dump($userManga);
        foreach($userManga as $manga){
        echo $manga->id.'<br/>';
        echo $manga->name.'<br/>';
        echo $manga->pivot->type.'<br/>';//pivot muestra los datos de la tabla mam
        echo $manga->pivot->last_episode.'<br/>';
        }
        }*/

        /* para guardar datos en una mam
        $episode = Episode::find(1);
        $episode->groups()->attach(1,['num_pages'=>1]);
         */
        /*
        $date = new DateTime('now');
        $episodes = EpisodeGroup::where('date_publication', '<', $date)->with('group')->with('episode')->orderBy('created_at', 'desc')->take(24)->get();
        dump($episodes);
        foreach ($episodes as $episode) {
        echo $episode->group->name . '<br>';
        }*/
        /*$mangasR = MangaR::where('id_manga', '=', '1')->with('manga')->get();
        //$mangasR = Manga::with('titles')->find('1');
        dump($mangasR);

        foreach ($mangasR as $mangas) {
        $mangaR = $mangas->manga;
        echo $mangas->id_manga . '<br/>';
        echo $mangaR->id . '<br/>';

        }*/
        $pruebas = $query = Manga::query();
        $mangas1 = $query->where('mangas.state', '=', 'Publicándose')->select('mangas.*')->get();
        dump($mangas1);
        $mangas = Manga::paginate(3);


        return view('Pruebas.index', ['data' => $mangas]);
    }

    function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $data = Manga::paginate(2);
            return view('Pruebas.pagination_data', compact('data'))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pruebas.multiplecheckboxdemo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function prueba(Request $request)
    {
        $form = $request->all();
        $formData =  array();
        parse_str($form['form'], $formData);
        $name = $formData['name'];
        $prueba = $request->get('prueba');
        $category = $formData['category'];
        if ($request->ajax()) {
            return view('pruebas.prueba', [
                'name' => empty($name) ? 'nosess' : $name,
                'prueba' => $prueba,
                'category' => $category
            ])->render();
        }
    }
}
