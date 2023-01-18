<div class="col-12 col-md-9 element-header-content-text">
    <h1 class="element-title my-2">
        {{ $manga->name }}
        <small class="text-muted">{{ ' (' . $manga->created_at->format('Y') . ')' }}</small>
    </h1>
    <h2 class="element-subtitle">{{ $manga->sub_name }}</h2>
    <p class="element-description">{{ $manga->description }}</p>

    <h5 class="element-subtitle">{{ __('Géneros') }}</h5>
    <h6 style="display: inline-block;">
        @forelse($manga->genders as $gender)
            <a class="badge badge-primary py-2 px-4 mx-1 my-2" href="#">{{ $gender->gender }}</a>
        @empty
            <a class="badge badge-primary py-2 px-4 mx-1 my-2" href="#">{{ __('No hay géneros') }}</a>
        @endforelse
    </h6>

    <h5 class="element-subtitle">{{ __('Estado') }}</h5>
    <span class="book-status {{ state($manga->state) }}">{{ __($manga->state) }}</span>
    <h5 class="element-subtitle">{{ __('Sinónimos') }}</h5>
    @forelse($manga->titles as $tile)
        <span class="badge badge-pill badge-transparent p-2 text-truncate" style="max-width:100%;">
            {{ $tile->title }}</span>
    @empty
        <span class="badge badge-pill badge-transparent p-2 text-truncate" style="max-width:100%;">
            {{ __('No hay sinónimos') }}</span>
    @endforelse
</div>
