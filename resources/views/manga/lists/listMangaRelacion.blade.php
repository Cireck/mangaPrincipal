<div class="row">
    @forelse($mangas as $manga)
        <div class="element col-6 col-sm-4 col-md-3 shadow" data-identifier="{{ $manga->id }}">
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
                    <span class="score"><i
                            class="fas fa-star fa-fw"></i><span>{{ $manga->score }}</span></span>
                    <span class="type badge {{ typeManga($manga->type) }}">{{ $manga->type }}</span>
                    <span
                        class="demography {{ demographyManga($manga->demography) }}">{{ $manga->demography }}</span>
                </div>
            </a>
        </div>
    @empty
        <div class="col-12 text-center my-5">
            <h3 class="text-dark"><i class="fas fa-times fa-5x"></i></h3>
            <h5>No hay elementos</h5>
        </div>
    @endforelse

</div>
