@extends('layouts.layout')
@section('title', __('Biblioteca'))
@section('buscador')
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('buscador.views.mangas.buscadorView')
            </div>

            <div class="col-12 col-lg-4 col-xl-3">
                <div class="espacio10"></div>
                @include('buscador.views.mangas.formBuscador')
            </div>
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="form-row mt-2">
                    @include('buscador.views.mangas.ordenarForm')
                </div>
                <div class="espacio10"></div>
                <div id="list">
                    @include('buscador.views.mangas.listView')
                </div>
            </div>
        </div>
    </main>
@endsection
