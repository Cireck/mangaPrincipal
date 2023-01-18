@extends('layouts.layout')
@section('title', $manga->name . ' - ' . __('Capítulo: ') . $episode->episode . ' - ' . $group->name)
@section('viewEpisode')
    @include('viewEpisode.views.infoEpisode')
    <div class="espacio5"></div>
    @include('viewEpisode.views.paginationEpisode')
    <div class="d-flex justify-content-center">
        {{ $pagination->onEachSide($pagination->total())->links('paginacion.viewEpisodePaginate') }}
    </div>
    <div id="main-container" class="viewer-container container">
        <div class="img-container text-center">
            @if (Storage::disk('local')->exists('public/Manga/' . $manga->id . '/' . $episodeGroup->id . '/' . $pagination->currentPage() . '.jpg'))
                <img src="{{ asset('storage/Manga/' . $manga->id . '/' . $episodeGroup->id . '/' . $pagination->currentPage() . '.jpg') }}"
                    class="viewer-image viewer-page" oncontextmenu="return false;">
            @else
                <img class="viewer-image viewer-page" src="{{ asset('storage/imagenes/no-image.png') }}"
                    oncontextmenu="return false;"> </br>
            @endif

        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $pagination->onEachSide($pagination->total())->links('paginacion.viewEpisodePaginate') }}
    </div>
    @include('viewEpisode.views.paginationEpisode')
    @include('viewEpisode.views.compatir')
    @include('viewEpisode.views.comentarios')
    <div class="espacio5"></div>
    @include('manga.views.reportManga')

@endsection
