<section class="container-fluid text-center ">
    <div class="espacio5"></div>
    <div class="row justify-content-md-center ">

        @empty(!$episodePrevious)
            <div id="episodePrevious" class="col-md-auto chapter-arrow ">
                @include('viewEpisode.views.modeView', [
                    'mangaType' => $manga->type,
                    'viewCapitulo' => 'Cap. Anterior',
                    'id' => $episodePrevious,
                ])
            </div>
        @endempty

        <div class="col-md-auto chapter-arrow">
            <a class="btn btn-primary" href="{{ route('mangaShow', $manga) }}">
                <i class="fas fa-bars fa-1x"></i> <small class="d-block">{{ __('Episodios') }}</small>
            </a>
        </div>
        @empty(!$episodeFollowing)
            <div id="episodeFollowing" class="col-md-auto  chapter-arrow ">
                @include('viewEpisode.views.modeView', [
                    'mangaType' => $manga->type,
                    'id' => $episodeFollowing,
                    'viewCapitulo' => 'Cap.
                            Siguiente',
                ])
            </div>
        @endempty
    </div>
    <div class="espacio5"></div>
</section>
