@if (Auth::user())
    @if (auth()->user()->profile->mode_view === 2)
        <a class="btn btn-primary" href="{{ route('viewCascade', $id) }}">
            <i class="fas {{ sentidoCapitulo($viewCapitulo) }} fa-1x"></i> <small
                class="d-block">{{ __($viewCapitulo) }}</small>
        </a>
    @elseif ($manga->type === 'Manhua' || $manga->type === 'Manhwa')
        <a class="btn btn-primary" href="{{ route('viewCascade', $id) }}">
            <i class="fas {{ sentidoCapitulo($viewCapitulo) }} fa-1x"></i> <small
                class="d-block">{{ __($viewCapitulo) }}</small>
        </a>
    @else
        <a class="btn btn-primary" href="{{ route('viewPaginate', $id) }}">
            <i class="fas {{ sentidoCapitulo($viewCapitulo) }} fa-1x"></i> <small
                class="d-block">{{ __($viewCapitulo) }}</small>
        </a>
    @endif
@else
    @if ($mangaType === 'Manhua' || $mangaType === 'Manhwa')
        <a class="btn btn-primary" href="{{ route('viewCascade', $id) }}">
            <i class="fas {{ sentidoCapitulo($viewCapitulo) }} fa-1x"></i> <small
                class="d-block">{{ __($viewCapitulo) }}</small>
        </a>
    @else
        <a class="btn btn-primary" href="{{ route('viewPaginate', $id) }}">
            <i class="fas {{ sentidoCapitulo($viewCapitulo) }} fa-1x"></i> <small
                class="d-block">{{ __($viewCapitulo) }}</small>
        </a>
    @endif
@endif
