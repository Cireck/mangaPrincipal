<?php

namespace App\Http\Controllers;

use App\Http\Traits\MangaTrait;
use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MangaController extends Controller
{
    use MangaTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Manga $manga)
    {

        //obtener el like del manga
        $porcentajeLike = $this->porcentajeLike($manga->id);
        $porcentajeDislike = $this->porcentajeDislike($manga->id);
        //obtener el total de users que vean el manga como pediende,leido,etc.
        $totalWatch = $this->totalItmensPedding($manga->id, 'watch');
        $totalPending = $this->totalItmensPedding($manga->id, 'pending');
        $totalFollow = $this->totalItmensPedding($manga->id, 'follow');
        $totalWish = $this->totalItmensPedding($manga->id, 'wish');
        $totalHave = $this->totalItmensPedding($manga->id, 'have');
        $totalAbandoned = $this->totalItmensPedding($manga->id, 'abandoned');
        //se obtiene la informacion del manga que esta leeyendo el usuario
        if (Auth::guest()) {
            $userManga = [];
        } else {
            //user
            $user = auth()->user();
            $userManga = $this->userManga($manga->id, $user->id);
        }
        //obtener el lastEpisode el user en el manga
        if (empty($userManga)) {
            $lastEpisode = [];
        } else {
            $lastEpisode = $this->lastEpisode($manga->id, $userManga->last_episode);
        }
        $episodes = $this->episodes($manga->id);
        return view('Manga.show', [
            'manga' => $manga,
            'porcentajeLike' => $porcentajeLike,
            'porcentajeDislike' => $porcentajeDislike,
            'totalWatch' => $totalWatch,
            'totalPending' => $totalPending,
            'totalFollow' => $totalFollow,
            'totalWish' => $totalWish,
            'totalHave' => $totalHave,
            'totalAbandoned' => $totalAbandoned,
            'userManga' => $userManga,
            'lastEpisode' => $lastEpisode,
            'episodes' => $episodes,
        ]);
    }
    public function voteManga(Request $request)
    {
        if (auth()->user()) {
            try {
                $mangaUser = $this->userManga($request->mangaId, auth()->user()->id);
                $mangaUser->like = $request->vote === 'like' ? '1' : '0';
                $mangaUser->save();
                $resp['status'] = true;
                $resp['data'] = $mangaUser;
            } catch (\Exception $e) {
                $resp['status'] = false;
                $resp['errors'] = $e->getMessage();
            }
        } else {
            $resp['status'] = false;
        }

        return response()->json($resp);
    }
    
    public function changeItemPending(Request $request)
    {
        if (auth()->user()) {
            try {
                $mangaUser = $this->userManga($request->mangaId, auth()->user()->id);
                if ($mangaUser->type === $request->itemBar) {
                    $mangaUser->type = '';
                    $resp['itemBar'] = false;
                } else {
                    $mangaUser->type = $request->itemBar;
                    $resp['itemBar'] = $request->itemBar;
                }
                $mangaUser->save();
                $resp['status'] = true;
                $resp['data'] = $mangaUser;
            } catch (\Exception $e) {
                $resp['status'] = false;
                $resp['errors'] = $e->getMessage();
            }
        } else {
            $resp['status'] = false;
        }

        return response()->json($resp);
    }
}
