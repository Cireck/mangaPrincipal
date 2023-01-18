<div id="popularsTab">
    <ul class="nav nav-pills nav-justified ">
        <li class="nav-item border" role="presentation"><a href="#popularTab">{{ __('Populares') }}</a></li>
        <li class="nav-item border" role="presentation"><a href="#seinenTab">{{ __('P. Seinen') }}</a></li>
        <li class="nav-item border" role="presentation"><a href="#joseiTab">{{ __('P. Josei') }}</a></li>
    </ul>

    <div id="popularTab">
        <div class="row">
            @include('Index.lists.listManga', ['mangas' => $mangasP])
        </div>
        <div class="espacio10 text-center"><a class="btn btn-primary" href="{{ route('populars') }}">Ver todo</a>
        </div>
    </div>
    <div id="seinenTab">
        <div class="row">
            @include('Index.lists.listManga', ['mangas' => $mangasPseinen])
        </div>
        <div class="espacio10 text-center"><a class="btn btn-primary" href="{{ route('popularsSeinen') }}">Ver
                todo</a>
        </div>
    </div>
    <div id="joseiTab">
        <div class="row">
            @include('Index.lists.listManga', ['mangas' => $mangasPjosei])
        </div>
        <div class="espacio10 text-center"><a class="btn btn-primary" href="{{ route('popularsJosei') }}">Ver todo</a>
        </div>
    </div>
</div>
