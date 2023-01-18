@forelse($mangas as $manga)
    <div class="element  col-6 col-sm-6 col-md-4 col-lg-3 mt-2 " data-identifier="{{ $manga->id }}">
        <a href="{{ route('mangaShow', $manga) }}">
            <div class="thumbnail book book-thumbnail">
                @if (Storage::disk('local')->exists('public/Manga/' . $manga->id . '/' . $manga->id . '.jpg'))
                    <img src="{{ asset('storage/Manga/' . $manga->id . '/' . $manga->id . '.jpg') }}" alt="..."
                        class="img-thumbnail">
                @else
                    <img class="img-thumbnail" src="{{ asset('storage/imagenes/no-image.png') }}">
                @endif
                <div class="thumbnail-title text-truncate">
                    {{ $manga->name }}
                </div>
                <span class="score"><i class="fas fa-star fa-fw"></i><span>{{ $manga->score }}</span></span>
                <span class="type badge {{ typeManga($manga->type) }}">{{ $manga->type }}</span>
                <span
                    class="proyect-status {{ statusMangaGroup(consultaMangaGroup($manga->id, $group->id)) }}">{{ __(consultaMangaGroup($manga->id, $group->id)) }}
                </span>
            </div>
        </a>
    </div>

@empty
    <div class="col-12 text-center my-5">
        <h3 class="text-dark"><i class="fas fa-times fa-5x"></i></h3>
        <h5>No hay elementos</h5>
    </div>
@endforelse
