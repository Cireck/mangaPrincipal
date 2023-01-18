@extends('layouts.layout')

@section('title', __('Popurales'))

@section('populars')
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-12 col-log-8 col-xl-9">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">{{ __('Popurales') }}</h1>
                        <div class="row">
                            @include('Index.lists.listManga', ['mangas' => $mangas])
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            {{ $mangas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection()
