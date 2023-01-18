@forelse ($mangas as $manga)
    <div class="row ranked-item p-0 m-0 ">
        <div class="col-3 position">{{ suma($loop->index) }}</div>
        <div class="col-9 description text-left text-truncate">
            <a href="{{ route('mangaShow', $manga) }}">
                <span class="badge {{ typeManga($manga->type) }} text-uppercase">{{ $manga->type }}</span>
                <span>{{ $manga->name }}</span>
            </a>
        </div>
    </div>
    <hr class="m-0">
@empty
@endforelse
