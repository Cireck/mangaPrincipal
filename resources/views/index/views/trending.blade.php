<div id="trendingsTab">
    <ul class="nav nav-pills nav-justified ">
        <li class="nav-item border" role="presentation"><a href="#trendingTab">{{ __('Tendencias') }}</a></li>
        <li class="nav-item border" role="presentation"><a href="#tseinenTab">{{ __('T. Seinen') }}</a></li>
        <li class="nav-item border" role="presentation"><a href="#tjoseiTab">{{ __('T. Josei') }}</a></li>
    </ul>

    <div id="trendingTab">
        <div class="row">
            @include('Index.lists.listManga', ['mangas' => $mangasT])
        </div>
    </div>
    <div id="tseinenTab">
        <div class="row">
            @include('Index.lists.listManga', ['mangas' => $mangasTseinen])
        </div>
    </div>
    <div id="tjoseiTab">
        <div class="row">
            @include('Index.lists.listManga', ['mangas' => $mangasTjosei])
        </div>
    </div>
</div>
