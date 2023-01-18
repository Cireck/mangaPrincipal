@forelse ($mangas as $manga )
    <div
        class="element {{ Request::route()->getName() === 'profileItemFollow' ? 'proyect-item' : '' }} col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mt-2 ">
        <a href="{{ route('mangaShow', $manga->manga) }}">
            <div class="thumbnail book book-thumbnail">
                @if (Storage::disk('local')->exists('public/Manga/' . $manga->manga->id . '/' . $manga->manga->id . '.jpg'))
                    <img src="{{ asset('storage/Manga/' . $manga->manga->id . '/' . $manga->manga->id . '.jpg') }}"
                        alt="..." class="img-thumbnail">
                @else
                    <img class="img-thumbnail" src="{{ asset('storage/imagenes/no-image.png') }}">
                @endif
                <img src="{{ asset('storage/Manga/' . $manga->manga->id . '/' . $manga->manga->id . '.jpg') }}"
                    alt="..." class="img-thumbnail">
                <div class="thumbnail-title">
                    <h4 class="text-truncate" title="{{ $manga->manga->name }}">
                        {{ $manga->manga->name }}</h4>
                </div>
                <span class="score"><i
                        class="fas fa-star fa-fw"></i><span>{{ $manga->manga->score }}</span></span>
                <span
                    class="book-type badge {{ typeManga($manga->manga->type) }} text-uppercase">{{ $manga->manga->type }}</span>
                @if (Request::route()->getName() === 'profileItemFollow')
                    <span
                        class="demography {{ demographyManga($manga->manga->demography) }}">{{ $manga->manga->demography }}</span>
                @else
                    <div class="thumbnail-footer text-center">
                        <small class="chapters_pending text-center"
                            style="font-weight: bold;font-size: 100%!important;">
                            {{ $manga->last_episode . ' /' }}
                            @forelse ($manga->manga->episodes as $episode)
                                @if ($loop->last)
                                    {{ $episode->episode }}
                                @endif
                            @empty
                            @endforelse
                        </small>
                    </div>
                @endif

            </div>
        </a>
    </div>
@empty
    <div class="col-12 text-center my-5">
        <h3 class="text-dark"><i class="fas fa-times fa-5x"></i></h3>
        <h5>No hay elementos</h5>
    </div>
@endforelse
