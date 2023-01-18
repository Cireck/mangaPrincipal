<?php

namespace App\Http\Controllers;

use App\Http\Traits\GroupTrait;
use App\Models\EpisodeGroup;
use App\Models\Group;
use App\Models\GroupManga;
use App\Models\GroupUser;
use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    use GroupTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function group(Group $group)
    {
        $totalSeguidores = $this->consultaSeguidoresGroup($group->id);
        $totalProyectos = $this->consultaProyectosGroup($group->id);
        $totalSubidas = $this->consultaSubidasGroup($group->id);
        if (Auth::user()) {
            $user = auth()->user();
            $userFollow = $this->consultaUserFollowGroup($user->id, $group->id);
        }
        $lastEpisodes = $group->episodes()->orderBy('created_at', 'desc')->take(20)->get();

        /*where pivot
        $group->mangas()->wherePivot('created_at', '>', '2017-10-10')->take(4)->get()*/
        return view('group.groupIndex', [
            'group' => $group,
            'totalSeguidores' => $totalSeguidores,
            'totalProyectos' => $totalProyectos,
            'totalSubidas' => $totalSubidas,
            'userFollow' => empty($userFollow) ? '' : $userFollow,
            'mangasPopulars' => empty($group->mangas) ? [] : $group->mangas,
            'mangasUltimos' => $group->mangas()->orderBy('created_at', 'desc')->take(4)->get(),
            'lastEpisodes' => $lastEpisodes,
            'miembros' => $group->userGroups,
        ]);
    }

    public function followUserGroup(Request $request)
    {
        if (auth()->user()) {
            try {
                $userGroup = $this->userGroup($request->groupId, auth()->user()->id);
                if ($userGroup->follow === 1) {
                    $userGroup->follow = 0;
                    $resp['follow'] = false;
                } else {
                    $userGroup->follow = 1;
                    $resp['follow'] = true;
                }
                $userGroup->save();
                $resp['status'] = true;
                $resp['data'] = $userGroup;
            } catch (\Exception $e) {
                $resp['status'] = false;
                $resp['errors'] = $e->getMessage();
            }
        } else {
            $resp['status'] = false;
        }

        return response()->json($resp);
    }
    public function groupProyects(Group $group, Request $request)
    {
        $totalSeguidores = $this->consultaSeguidoresGroup($group->id);
        $totalProyectos = $this->consultaProyectosGroup($group->id);
        $totalSubidas = $this->consultaSubidasGroup($group->id);
        if (Auth::user()) {
            $user = auth()->user();
            $userFollow = $this->consultaUserFollowGroup($user->id, $group->id);
        }
        /*where pivot
        $group->mangas()->wherePivot('created_at', '>', '2017-10-10')->take(4)->get()*/
        return view('group.groupProyects', [
            'group' => $group,
            'totalSeguidores' => $totalSeguidores,
            'totalProyectos' => $totalProyectos,
            'totalSubidas' => $totalSubidas,
            'userFollow' => empty($userFollow) ? '' : $userFollow,
            'miembros' => $group->userGroups,
            'mangas' => $group->mangas()->orderBy('created_at', 'desc')->paginate(16),
        ]);
    }

    public function listProyectsGroup(Request $request)
    {
        $id = $request->get('groupId');
        $group = Group::where('id', $id)->with('mangas')->first();
        $type = $request->get('type');
        $status = $request->get('status');
        if (empty($type) && empty($status)) {
            $mangas =  $group->mangas()->orderBy('created_at', 'desc')->paginate(16);
        } elseif (empty($type)) {
            $mangas =  $group->mangas()->wherePivot('state', '=', $status)->orderBy('created_at', 'desc')->paginate(16);
        } elseif (empty($status)) {
            $mangas =  $group->mangas()->where('type', '=', $type)->orderBy('created_at', 'desc')->paginate(16);
        } else {
            $mangas =  $group->mangas()->where('type', '=', $type)->wherePivot('state', '=', $status)->orderBy('created_at', 'desc')->paginate(16);
        }
        if ($request->ajax()) {
            return view('group.views.groupProyects.viewPaginationProyects', [
                'group' => $group,
                'mangas' => $mangas,
            ]);
        }
    }
}
