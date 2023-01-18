@extends('layouts.layout')
@section('title', $manga->name . ' - ' . $manga->type . ' - MangaC')
@section('mangaShow')
    <section class="element">
        <header class="container-fluid element-header manga">
            <div class="background"></div>
            <div class="wallpaper"></div>
            <div class="element-shadow"></div>
            <section class="element-header-content">
                <div class="container h-100">
                    <div class="row">
                        @include('Manga.views.imgManga')
                        @include('Manga.views.infoManga')
                    </div>
                </div>
            </section>
            <div class="espacio10"></div>
            @include('Manga.views.barManga')
        </header>
        <main role="main" class="container-fluid element-body">
            <div class="container p-0 p-sm-2">
                <div class="row">
                    @include('Manga.views.episodes')
                    @include('Manga.views.compartirManga')
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        @include('Manga.views.comentariosManga')
                        <div class="row">
                            <div class="col-12">
                                <h2 class="mt-5">{{ __('Relacionados') }}</h2>
                            </div>
                            @include('manga.lists.listMangaRelacion', ['mangas' => $manga->mangapS])
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        @include('Manga.lists.listGroups')
                    </div>
                </div>
                <div class="espacio10"></div>
                @include('Manga.views.reportManga')
            </div>
        </main>
        {{-- @include('manga.scripts.scriptManga') --}}
    @endsection
