<?php

namespace App\Http\Controllers;

use App\Http\Traits\BuscadorGroupTrait;
use App\Http\Traits\BuscadorTrait;
use App\Models\Manga;
use Barryvdh\Debugbar\Twig\Extension\Dump;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class BuscadorGroupController extends Controller
{

    use BuscadorGroupTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscadorGroup(Request $request)
    {
        if ($request->get('search')) {
            $busqueda = $request->get('search');
            $mangas = Manga::where('name',  "like", "%$busqueda%")->paginate(2);
        }
        $mangas = Manga::paginate(2);

        return view('buscadorGroup.buscadorIndex', [
            'mangas' => $mangas,
            'busqueda' => empty($busqueda) ? '' : $busqueda,
        ]);
    }

    public function buscadorListGroup(Request $request)
    {
        $query = Manga::query();
        $aplicarFiltros = $request->get('aplicarFiltros');
        $busqueda = $request->get('search');
        if (empty($aplicarFiltros)) {
            $mangas = Manga::where('name', "like", "%$busqueda%")->paginate(2);
        } else {
            $order = $request->get('order');
            $orderList = $request->get('orderList');
            $form = $request->all();
            $formData =  array();
            parse_str($form['form'], $formData);
            $type = $formData['type'];
            $demography = $formData['demography'];
            $status = $formData['status'];
            $translationStatus = $formData['translation_status'];
            $webcomic = $formData['webcomic'];
            $yonkoma = $formData['yonkoma'];
            $amateur = $formData['amateur'];
            $erotic = $formData['erotic'];
            $genders = [];
            $excludeGenders = [];
            if (isset($formData['genders'])) {
                $genders = $formData['genders'];
                $query = $this->mangasGenders($genders, $query);
                $consultaGender = 'si';
            }
            if (isset($formData['exclude_genders'])) {
                $excludeGenders = $formData['exclude_genders'];
                $query = $this->mangasExcludeGenders($excludeGenders, $query,  $genders);
            }
            if (!empty($type)) {
                $query = $query->where('mangas.type', '=', $type);
            }
            if (!empty($demography)) {
                $query = $query->where('mangas.demography', '=', $demography);
            }
            if (!empty($status)) {
                $query = $query->where('mangas.state', '=', $status);
            }
            if (!empty($translationStatus)) {
                dump($translationStatus);
                $query = $this->mangasTranslationStatus($translationStatus, $query);
            }
            if (!empty($webcomic)) {
                $query = $query->where('mangas.webcomic', '=', $webcomic);
            }
            if (!empty($yonkoma)) {
                $query = $query->where('mangas.yonkoma', '=', $yonkoma);
            }
            if (!empty($amateur)) {
                $query = $query->where('mangas.amateur', '=', $amateur);
            }
            if (!empty($erotic)) {
                $query = $query->where('mangas.erotic', '=', $erotic);
            }

            $query = $this->mangasOrder($order, $orderList, $query);

            $mangas = $query->where('mangas.name', "like", "%$busqueda%")->select('mangas.*')->distinct('mangas.id')->paginate(2);
        }
        if ($request->ajax()) {
            return view('buscadorGroup.views.mangas.listView', [
                'mangas' => $mangas,
            ]);
        }
    }
}
