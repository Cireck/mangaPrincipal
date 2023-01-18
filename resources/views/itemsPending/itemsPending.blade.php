@extends('layouts.layout')
@section('indexItemsPending')
    <main role="main" class="container-fluid">
        <div class="espacio5"></div>
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-9">
                <h1>Mis Capítulos Pendientes</h1>
                @include('itemsPending..views.barItemsPending')
                <div class="row">
                    @include('itemsPending.lists.listManga')
                </div>
                <div class="espacio5"></div>
                <div class="d-flex justify-content-center">
                    {{ $mangas->links() }}
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3"></div>
        </div>
    </main>
@endsection
