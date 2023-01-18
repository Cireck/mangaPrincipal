<div class="row">
    <div class="col-12 mt-2">
        <h2 class="group-color">{{ __('Grupos Seguidos') }}</h2>
    </div>
    @include('profile.lists.listGroups', ['groups' => $groupsFollow, 'myGroups' => 'no'])
    @if (Request::route()->getName() === 'profile' || Request::route()->getName() === 'profileUser')
        <div class="col-12 mt-2">
            <a class="btn btn-block btn-primary"
                href="{{ rutaProfileGroupFollow(Request::route()->getName(), ['user' => $user, 'url' => $profile->url]) }}"><i
                    class="fas fa-users fa-fw"></i>
                {{ Request::route()->getName() === 'profile' ? __('Ir a Grupos Seguidos') : __('Ver todo') }}</a>
        </div>
    @endif
</div>
