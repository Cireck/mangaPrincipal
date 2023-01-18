<section class="element-header-content">
    <div class="container ">
        <div class="row">
            <div class="col-12 col-md-3 text-center">
                <div class="group-type bg-user mt-4">{{ __('USUARIO') }}</div>
                <div class="element-image my-2">
                    @if (Storage::disk('local')->exists('public/profiles/' . $profile->id . '.jpg'))
                        <img class="group-thumbnail " src="{{ asset('storage/profiles/' . $profile->id . '.jpg') }}">
                    @else
                        <img class="group-thumbnail " src="{{ asset('storage/imagenes/default-avatar.jpg') }}">
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-9 element-header-content-text">
                <h1 class="element-title my-2"><a
                        href="{{ rutaProfile(Request::route()->getName(), [$user, $profile->nick]) }}"
                        class="text-light">{{ $profile->nick }}</a>
                </h1>
                @if (Request::route()->getName() === 'profileUser' || Request::route()->getName() === 'profileUserItemFollow' || Request::route()->getName() === 'profileUserMyGroups' || Request::route()->getName() === 'profileUserGroupsFollow')
                    <span class="badge badge-transparent p-2">
                        <i class="fas {{ $profile->gender === 'M' ? 'fa-mars' : 'fa-venus' }}"></i></i>
                        {{ $profile->gender === 'M' ? 'Masculino' : 'Femenino' }}
                    </span>
                @else
                    <span class="badge badge-transparent p-2">
                        <i class="flag-icon {{ flagCounty($profile->country) }}"></i>
                        {{ nameCounty($profile->country) }}
                    </span>
                @endif



            </div>
        </div>
    </div>
</section>
