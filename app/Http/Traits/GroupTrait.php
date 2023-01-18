<?php

namespace App\Http\Traits;

use App\Models\Episode;
use App\Models\EpisodeGroup;
use App\Models\GroupManga;
use App\Models\GroupUser;
use App\Models\MangaUser;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;


trait GroupTrait
{
    function consultaSeguidoresGroup($id)
    {
        $consulta = GroupUser::where('group_id', '=', $id)->where('follow', '1')->count('group_id');
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

    function consultaSubidasGroup($id)
    {
        $consulta = EpisodeGroup::where('group_id', '=', $id)->count('group_id');
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

    function consultaProyectosGroup($id)
    {
        $consulta = GroupManga::where('group_id', '=', $id)->count('group_id');
        return $consulta;
    }

    function consultaUserFollowGroup($idUser, $idGroup)
    {
        $consulta = GroupUser::where('group_id', '=', $idGroup)
            ->where('user_id', '=', $idUser)->take(1)->get();
        foreach ($consulta as $group) {
            if ($group->follow === 1) {
                return 'active';
            } else {
                return '';
            }
        }
    }
    function consultaMangasPopularsGroup($idGroup)
    {
        $consulta = GroupManga::where('group_id', '=', $idGroup)->take('8')->get();
        return $consulta;
    }

    function userGroup($groupId, $user_id)
    {
        $consulta = GroupUser::where('group_id', '=', $groupId)
            ->where('user_id', '=', $user_id)->take(1)->get();
        foreach ($consulta as $userGroup1) {
            $userGroup = $userGroup1;
        }
        if (empty($userGroup)) {
            $userGroup = new GroupUser();
            $userGroup->user_id = $user_id;
            $userGroup->group_id = $groupId;
            $userGroup->follow = 1;
            $userGroup->save();
            return $userGroup;
        } else {
            return $userGroup;
        }
    }
}
