@forelse($groups as $group)
    <div class=" col-12 col-sm-12 col-md-6 mt-2 ">
        <a href="{{ route('groupShow', $group->group) }}">
            <div class="thumbnail group group-thumbnail-59072">
                @if (Storage::disk('local')->exists('public/Groups/Logo/' . $group->group->id . '.jpg'))
                    <img src="{{ asset('storage/Groups/Logo/' . $group->group->id . '.jpg') }}" alt="..."
                        class="img-thumbnail">
                @else
                    <img class="img-thumbnail" src="{{ asset('storage/imagenes/no-image.png') }}">
                @endif

                <div class="thumbnail-title">
                    <h4 class="text-truncate" title="Neko Kawaii Scan">{{ $group->group->name }}</h4>
                </div>
                <span class="followers"><i
                        class="fas fa-users fa-fw"></i><span>{{ countFollowGroup($group->group->id) }}</span></span>
                <span class="book-type badge {{ typeGroup($group->group->type) }}}">{{ $group->group->type }}</span>
            </div>
        </a>
        @if (Request::route()->getName() === 'profile' || Request::route()->getName() === 'profileMyGroups')
            @if ($myGroups === 'si')
                <a href="https://lectortmo.com/scan_management/113411" class="manage-access"><i
                        class="fas fa-cog"></i>
                    {{ __('Gestionar') }}</a>
            @endif
        @endif
    </div>
@empty
    <p>{{ __('No hay grupos') }}</p>
@endforelse
