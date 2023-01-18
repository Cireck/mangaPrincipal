@extends('layouts.layout')
@section('title', __('Libros ' . $title) . ' - ' . $profile->nick . __(' - Usuarios') . ' - MangaC')
@section('profile')
    <section class="element">
        <header class="container-fluid element-header user">
            <div class="background"></div>
            <div class="wallpaper"></div>
            <div class="element-shadow"></div>
            @include('profile.views.infoProfile')
            @include('profile.views.barProfile')
        </header>
        <main role="main" class="container-fluid element-body p-0">
            <div class="container p-0 p-sm-2">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="group-color">{{ __('Libros ' . $title) }}</h2>
                            </div>
                            @include('itemsPending.lists.listManga')
                        </div>
                        <div class="espacio5"></div>
                        <div class="d-flex justify-content-center">
                            {{ $mangas->links() }}
                        </div>

                    </div>
                    <div class="col-12 col-lg-4 text-center">
                        @include('profile.views.compartir')
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
