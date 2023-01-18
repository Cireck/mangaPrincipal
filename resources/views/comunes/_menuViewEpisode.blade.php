<nav class="navbar navbar-fixed-top navbar-dark bg-dark px-0">
    <div class="row d-flex row-cols-auto justify-content-center m-0 mx-auto col-12">
        <a class="col-8 col-md-2 navbar-brand text-center" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>
        <div class="d-inline px-1">
            <a class="nav-link" href="#" id="toggleLightDarkBtn" data-theme="light" title="Modo nocturno">
                <i class="fas fa-eye fa-fw"></i>
                <span id="toggleLightDarkIcon">
                    <i class="fas fa-toggle-off"></i>
                </span>
            </a>
        </div>

        <div class="d-inline px-1">
            @if ($manga->type !== 'Manhwa' && $manga->type !== 'Manhua')
                @if (Request::route()->getName() === 'viewPaginate')
                    <a class="nav-link" href="{{ route('viewCascade', $episodeGroup->id) }}" title="Cascada">
                        <i class="far fa-copy fa-fw"></i>
                        <span class="d-none d-md-inline">{{ __('Cascada') }}</span>
                    </a>
                @else
                    <a class="nav-link" href="{{ route('viewPaginate', $episodeGroup->id) }}" title="paginated">
                        <i class="far fa-file fa-fw"></i>
                        <span class="d-none d-md-inline">{{ __('Paginada') }}</span>
                    </a>
                @endif
            @endif
        </div>
        <div class="d-inline px-1">
            <a class="nav-link" href="#" id="fullWidthBtn" title="Ancho">
                <i class="fas fa-expand fa-fw "></i>
                <span class="d-none d-md-inline">{{ __('Ancho') }}</span>
            </a>
            <a class="nav-link" href="#" style="display: none;" id="adaptedBtn" title="Ajustado">
                <i class="fas fa-compress fa-fw "></i>
                <span class="d-none d-md-inline">{{ __('Ajustado') }}</span>
            </a>
        </div>
        <div class="d-inline px-1">
            <a class="nav-link" href="#" id="fullScreenBtn" title="Completa">
                <i class="direction-btn fas fa-expand-arrows-alt fa-fw ">
                </i>
                <span class="d-none d-md-inline">{{ __('Completa') }}</span>
            </a>
        </div>
    </div>
</nav>
