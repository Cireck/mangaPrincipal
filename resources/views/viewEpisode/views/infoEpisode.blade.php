<section class="container-fluid text-center bg-manga">
    <div class="row align-items-center">
        <div class="col-12">
            <h1>{{ $manga->name }}</h1>
            <h2> {{ __('Capítulo ') . $episode->episode . __(' Subido por') }}
                <a href="{{ route('showGroup', $group) }}">{{ $group->name }}</a>
            </h2>
            <h4 class="no-margin">
                <i class="fas {{ sentidoDeLectura($manga->type) }} "></i>&nbsp;<i
                    class="fas {{ sentidoDeLectura($manga->type) }} "></i>&nbsp;&nbsp;<b>{{ $manga->type }}</b>.
                {{ __('Sentido de lectura: De ') . sentido($manga->type) . __(' a izquierda') }}&nbsp;&nbsp;<i
                    class="fas {{ sentidoDeLectura($manga->type) }} "></i>&nbsp;<i
                    class="fas {{ sentidoDeLectura($manga->type) }} "></i>
            </h4>
        </div>
    </div>
</section>
