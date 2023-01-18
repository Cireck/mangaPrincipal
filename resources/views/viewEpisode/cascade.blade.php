@extends('layouts.layout')
@section('title', $manga->name . ' - ' . __('Capítulo: ') . $episode->episode . ' - ' . $group->name)

@section('viewEpisode')
    @include('viewEpisode.views.infoEpisode')
    <div class="espacio5"></div>
    @include('viewEpisode.views.paginationEpisode')
    <div id="main-container" class="viewer-container container">
        <div class="img-container text-center">
            @for ($i = 1; $i <= $countArchivos; $i++)
                < @if (Storage::disk('local')->exists('public/Manga/' . $manga->id . '/' . $episodeGroup->id . '/' . $i . '.jpg'))
                    <img src="{{ asset('storage/Manga/' . $manga->id . '/' . $episodeGroup->id . '/' . $i . '.jpg') }}"
                        class="viewer-image viewer-page" oncontextmenu="return false;">
                @else
                    <img class="viewer-image viewer-page" src="{{ asset('storage/imagenes/no-image.png') }}"
                        oncontextmenu="return false;">
            @endif
            @endfor

        </div>
    </div>
    @include('viewEpisode.views.paginationEpisode')
    @include('viewEpisode.views.compatir')
    @include('viewEpisode.views.comentarios')
    <div class="espacio5"></div>
    @include('manga.views.reportManga')
@endsection
