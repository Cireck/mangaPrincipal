<div id="topTab">
    <ul class="nav nav-pills nav-justified ">
        <li class="nav-item border" role="presentation"><a href="#semanalTab">{{ __('Top Semanal') }}</a></li>
        <li class="nav-item border" role="presentation"><a href="#mensualTab">{{ __('Top Mensual') }}</a></li>
    </ul>

    <div id="semanalTab">
        <div class="container p-0 rank bg-light">
            @include('index.lists.listMangaTop', ['mangas' => $mangasTopSemanal])
        </div>
    </div>
    <div id="mensualTab">
        <div class="container p-0 rank bg-light">
            @include('index.lists.listMangaTop', ['mangas' => $mangasTopMensual])
        </div>
    </div>
</div>
