<?php

namespace App\Http\Traits;

use App\Models\Episode;
use App\Models\GroupUser;
use App\Models\MangaUser;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;


trait ProfileTrait
{
    //funcion para dar el titulo digamos read = Leído
    function titulo($item)
    {
        if ($item === 'read') {
            $titulo = 'Leídos';
        } elseif ($item === 'pending') {
            $titulo = 'Pendientes';
        } elseif ($item === 'follow') {
            $titulo = 'Siguiendo';
        } elseif ($item === 'wish') {
            $titulo = 'Favoritos';
        } elseif ($item === 'have') {
            $titulo = 'que Tengo';
        } elseif ($item === 'abandoned') {
            $titulo = 'que Abandoné';
        } else {
            $titulo = '';
        }
        return $titulo;
    }

    //funcion para obtener los mangas que el user este siguiendo o follow
    function consultaMangasFollow($itemFollow)
    {
        $consulta = MangaUser::where('user_id', '=', auth()->user()->id)
            ->where('type', '=', $itemFollow)->paginate(24);
        return $consulta;
    }

    function consultaGroupsFollow($paginate, $user)
    {
        if ($paginate === 'si') {
            $consulta = GroupUser::with('group')
                ->join('groups', 'group_user.group_id', '=', 'groups.id')
                ->where('group_user.user_id', '=', $user)
                ->where('group_user.follow', '=', '1')
                ->where('groups.verified', '=', '1')
                ->select('group_user.*')
                ->paginate(6);
        } else {
            $consulta = GroupUser::with('group')
                ->join('groups', 'group_user.group_id', '=', 'groups.id')
                ->where('group_user.user_id', '=', $user)
                ->where('group_user.follow', '=', '1')
                ->where('groups.verified', '=', '1')
                ->select('group_user.*')
                ->take(4)->get();
        }

        return $consulta;
    }

    function consultaMyGroups($paginate, $user, $request)
    {

        if ($paginate === 'si') {
            $page = $request->page;
            $consulta = GroupUser::with('group')
                ->join('groups', 'group_user.group_id', '=', 'groups.id')
                ->where('group_user.user_id', '=', $user)
                ->where('groups.verified', '=', '1')
                ->where('group_user.role', '=', 'lider')
                ->orWhere('group_user.role', '=', 'miembro')
                ->select('group_user.*')
                ->get();
            $myGroups = new lengthAwarePaginator($consulta->forPage($page, 6), count($consulta), 6, $currentPage = null, $options = ['path' => $request->url(), 'query' => $request->query()]);
        } else {
            $myGroups = GroupUser::with('group')
                ->join('groups', 'group_user.group_id', '=', 'groups.id')
                ->where('group_user.user_id', '=', $user)
                ->where('groups.verified', '=', '1')
                ->where('group_user.role', '=', 'lider')
                ->orWhere('group_user.role', '=', 'miembro')
                ->select('group_user.*')
                ->take(4)->get();
        }
        return $myGroups;
    }
}
