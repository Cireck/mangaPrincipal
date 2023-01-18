@extends('layouts.layout')

@section('title', 'MangaC')
@section('index')
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-12 col-log-8 col-xl-9">
                <div class="row">
                    <div class="col">
                        <div class="espacio5"></div>
                        @include('Index.views.populars')
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        @include('Index.lists.listCapitulos')
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">{{ __('Tendencias') }}</h1>
                        @include('Index.views.trending')
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        ultimos memes
                        <div class="espacio5"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        ultimas noticias
                        <div class="espacio5"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">{{ __('Últimos añadidos') }}</h1>
                        <div class="row">
                            @include('Index.lists.listManga', ['mangas' => $mangasNew])
                        </div>
                        <div class="espacio5"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">{{ __('Capítulos añadidos recientemente') }}</h1>
                        @include('Index.lists.listEpisodeManga', ['episodes' => $episodesNew])
                        <div class="espacio10 text-center"><a class="btn btn-primary"
                                href="{{ route('newEpisodes') }}">Ver
                                todo</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-log-4 col-xl-3">
                <div class="mt-2 text-center">
                    mensajes del discord y discord lista de los miembros
                </div>
                <div class="mt-2 text-center">
                    @include('index.views.topManga')
                </div>
                <div class="mt-2 ">
                    recomendacion de un manga
                </div>
            </div>
        </div>
    </main>
@endsection
