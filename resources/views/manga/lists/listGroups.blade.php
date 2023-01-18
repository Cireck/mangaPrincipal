<div class="espacio5">
</div>
<div class="row">
    <div class="col-12">
        <h2>{{ __('Grupos') }}</h2>
    </div>
    <div class="col-12">
        <div class="row">
            @forelse($manga->groups as $group)
                <div class="col-12">
                    <div class=" group-smal my-2 ">
                        <a href="{{ route('groupShow', $group) }}">
                            <div class="thumbnail group group-thumbnail-59072">
                                @if (Storage::disk('local')->exists('public/Groups/Logo/' . $group->id . '.jpg'))
                                    <img class="img-thumbnail"
                                        src="{{ asset('storage/Groups/Logo/' . $group->id . '.jpg') }}"
                                        alt="...">
                                @else
                                    <img class="img-thumbnail" src="{{ asset('storage/imagenes/no-image.png') }}">
                                @endif

                                <div class="thumbnail-title">
                                    <h4 class="text-truncate" title="Neko Kawaii Scan">{{ $group->name }}</h4>
                                </div>
                                <span class="followers"><i
                                        class="fas fa-users fa-fw"></i><span>{{ countFollowGroup($group->id) }}</span></span>
                                <span
                                    class="book-type badge {{ typeGroup($group->type) }}}">{{ $group->type }}</span>
                                <span
                                    class="status {{ statusMangaGroup(consultaMangaGroup($manga->id, $group->id)) }}">{{ __('Traducción: ' . consultaMangaGroup($manga->id, $group->id)) }}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <p>{{ __('No hay grupos') }}</p>
            @endforelse
        </div>
    </div>
</div>
<div class="sticky-top">
    <div class="pbl pbl_lateral_bottom text-center">
    </div>
</div>
