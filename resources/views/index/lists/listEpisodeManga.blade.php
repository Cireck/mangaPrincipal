<div class="row">
    @forelse($episodes as $episode)
        <div class="element  col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mt-2 shadow"
            data-identifier="{{ $episode->manga->id }}">
            <a href="{{ route('mangaShow', $episode->manga) }}">
                <div class="thumbnail">
                    @if (Storage::disk('local')->exists('public/Manga/' . $episode->manga->id . '/' . $episode->manga->id . '.jpg'))
                        <img src="{{ asset('storage/Manga/' . $episode->manga->id . '/' . $episode->manga->id . '.jpg') }}"
                            alt="..." class="img-thumbnail">
                    @else
                        <img class="img-thumbnail" src="{{ asset('storage/imagenes/no-image.png') }}">
                    @endif
                    <div class="thumbnail-title text-truncate">
                        {{ $episode->manga->name }}
                    </div>
                    <div class="upload_time badge">
                        <span class="number"><i class="far fa-clock fa-fw"></i>0 h</span>
                    </div>
                    <span
                        class="type badge {{ typeManga($episode->manga->type) }}">{{ $episode->manga->type }}</span>
                    <div class="thumbnail-footer">
                        <div class="row text-center no-gutters">

                            <div class="uploaded_by text-truncate" data-toggle="tooltip"
                                title="{{ $episode->group->name }}">
                                <span class="groups ">{{ $episode->group->name }}</span>

                            </div>
                        </div>
                        <div class="row text-center no-gutters">
                            {{-- <div class="col">
                            <div class="popularity">
                                <span class="title_episode">{{__('Popularidad')}}</span>
                                <div class="gauge gauge-small gauge-red">
                                    <div class="gauge-arrow" data-percentage="{{$episode->view}}"
                                        style="transform: rotate(-90deg);"></div>
                                </div>
                            </div>
                        </div> --}}
                            <div class="col">
                                <div class="chapter-number">
                                    <span class="title_episode">{{ __('Capítulo') }}</span>
                                    <span class="number">{{ $episode->episode->episode }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @empty
        <div class="card">
            @lang('No hay proyectos para mostrar')
        </div>
    @endforelse

</div>
