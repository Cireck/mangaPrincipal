<?php

namespace App\Http\Controllers;

use App\Http\Traits\ProfileTrait;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\MangaUser;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;

class ProfileController extends Controller
{
    use ProfileTrait;
    public function __construct()
    {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function itemsPending(string $itemsPending)
    {
        $mangas = MangaUser::where('user_id', '=', Auth::user()->id)
            ->where('type', '=', $itemsPending)->with('manga')->paginate(48);
        return view('itemsPending.itemsPending', [
            'itemsPending' => $itemsPending,
            'mangas' => $mangas,

        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = auth()->user();
        $groupsFollow = $this->consultaGroupsFollow('no', $user->id);
        $myGroups = $this->consultaMyGroups('no', $user->id, '');
        return view('profile.profile', [
            'user' => $user,
            'profile' => $user->profile,
            'groupsFollow' => $groupsFollow,
            'myGroups' => $myGroups,
        ]);
    }

    public function profileItemFollow($item)
    {
        $title = $this->titulo($item);
        $mangas = $this->consultaMangasFollow($item);
        return view('profile.profileMangasFollow', [
            'user' => auth()->user(),
            'profile' => auth()->user()->profile,
            'mangas' => $mangas,
            'item' => $item === 'read' ? 'watch' : $item,
            'title' => $title,
        ]);
    }

    public function profileMyGroups(Request $request)
    {
        $user = auth()->user();
        $myGroups = $this->consultaMyGroups('si', $user->id, $request);
        return view('profile.profileMyGroups', [
            'user' => $user,
            'profile' => $user->profile,
            'myGroups' => $myGroups,
        ]);
    }

    public function profileGroupsFollow()
    {
        $user = auth()->user();
        $groupsFollow = $this->consultaGroupsFollow('si', $user->id);
        return view('profile.profileGroupsFollow', [
            'user' => $user,
            'profile' => $user->profile,
            'groupsFollow' => $groupsFollow,

        ]);
    }

    public function profileCreateGroup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', Rule::unique('groups')],
            'email' => ['required', Rule::unique('groups'), 'email'],
        ]);

        if ($validator->fails()) {
            $resp['status'] = false;
            $resp['errors'] = $validator->getMessageBag()->toArray();
            return response()->json($resp);
        }

        try {
            $user = auth()->user();
            $group = new Group();
            $groupUser = new GroupUser();
            $group->name = $request->name;
            $group->email = $request->email;
            $group->user_id = $user->id;
            $group->url = str_replace(" ", "-", $request->name);
            $group->save();
            $groupUser->role = 'lider';
            $groupUser->group_id = $group->id;
            $groupUser->user_id = $user->id;
            $groupUser->save();
            $resp['status'] = true;
            $resp['data'] = [$group, $groupUser];
        } catch (\Exception $e) {
            $resp['status'] = false;
            $resp['errors'] = $e->getMessage();
        }

        return response()->json($resp);
    }

    public function profileEdit()
    {
        //return back()->with('message', 'Data added Successfully');//usar toastr para mostrar mensajes
        $user = auth()->user();
        return view('profile.profileEdit', [
            'user' => $user,
            'profile' => $user->profile,

        ]);
    }

    public function profileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required'],
            'avatar' => ['image', 'mimes:png,jpg', 'max:1000'],
            'countryId' => ['required'],
            'gender' => ['required'],
            'birthday' => ['required'],
            'facebook' => ['required'],
            'twitter' => ['required'],
            'web' => ['required'],
            'profileView' => ['required'],
            'modeView' => ['required'],
        ]);

        if ($validator->fails()) {
            $resp['status'] = false;
            $resp['errors'] = $validator->getMessageBag()->toArray();
            return response()->json($resp);
        }

        try {
            $profile = auth()->user()->profile;
            $profile->nick = $request->username;
            $profile->country = $request->countryId;
            $profile->gender = $request->gender;
            $profile->birthday = $request->birthday;
            $profile->facebook = $request->facebook;
            $profile->twitter = $request->twitter;
            $profile->sitio_web = $request->web;
            $profile->profile_view = $request->profileView;
            $profile->mode_view = $request->modeView;
            $profile->url = str_replace(" ", "-", $request->username);
            $profile->save();
            $resp['status'] = true;
            $resp['data'] = $profile;
            if ($request->avatar) {
                Storage::putFileAs('public/profiles/', $request->avatar, $profile->id . '.jpg');
            }
        } catch (\Exception $e) {
            $resp['status'] = false;
            $resp['errors'] = $e->getMessage();
        }

        return response()->json($resp);
    }

    public function profileUpdatePass(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|max:15',
            'passwordConfirmation' => 'required|same:password|min:6|max:15',
        ]);

        if ($validator->fails()) {
            $resp['status'] = false;
            $resp['errors'] = $validator->getMessageBag()->toArray();
            return response()->json($resp);
        }

        try {
            $profile = auth()->user()->profile;
            $user = $profile->user;
            $user->password = Hash::make($request->password);
            $user->save();
            $resp['status'] = true;
            $resp['data'] = $user;
        } catch (\Exception $e) {
            $resp['status'] = false;
            $resp['errors'] = $e->getMessage();
        }

        return response()->json($resp);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*los que tenga el User es para mostar perfil de un usuario que desea ver y no es del mismo user que esta loqueado */
    public function profileUser(User $user)
    {
        $userLogueado = auth()->user();
        if ($user->id === $userLogueado->id) {
            return redirect()->route('profile');
        }
        $profile = $user->profile;
        if ($profile->profile_view === 2) { //hacer esto
            return back()->with('warning', 'El usuario esta en privado'); //usar toastr para mostrar mensajes
        } else {
            $profile = $user->profile;
            $groupsFollow = $this->consultaGroupsFollow('no', $user->id);
            $myGroups = $this->consultaMyGroups('no', $user->id, '');
            return view('profile.ProfileUser.profileUser', [
                'user' => $user,
                'profile' => $profile,
                'groupsFollow' => $groupsFollow,
                'myGroups' => $myGroups,
            ]);
        }
    }

    public function profileUserItemFollow(User $user, $nick, $item)
    {
        $profile = $user->profile;
        $title = $this->titulo($item);
        $mangas = $this->consultaMangasFollow($item);
        return view('profile.ProfileUser.profileUserMangasFollow', [
            'user' => $user,
            'profile' => $profile,
            'mangas' => $mangas,
            'item' => $item === 'read' ? 'watch' : $item,
            'title' => $title,
        ]);
    }

    public function profileUserMyGroups(User $user, Request $request)
    {
        $profile = $user->profile;
        $myGroups = $this->consultaMyGroups('si', $user->id, $request);
        return view('profile.ProfileUser.profileUserMyGroups', [
            'user' => $user,
            'profile' => $profile,
            'myGroups' => $myGroups,
        ]);
    }

    public function profileUserGroupsFollow(User $user)
    {
        $profile = $user->profile;
        $groupsFollow = $this->consultaGroupsFollow('si', $user->id);

        return view('profile.ProfileUser.profileUserGroupsFollow', [
            'user' => $user,
            'profile' => $profile,
            'groupsFollow' => $groupsFollow,

        ]);
    }
}
