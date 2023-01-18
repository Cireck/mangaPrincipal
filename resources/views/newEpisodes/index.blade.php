@extends('layouts.layout')

@section('title', __('Capítulos añadidos recientemente'))

@section('newEpisodes')
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-12 col-log-8 col-xl-9">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">{{ __('Capítulos añadidos recientemente') }}</h1>
                        @include('Index.lists.listEpisodeManga', ['episodes' => $episodesNew])
                        <hr>
                        <div class="d-flex justify-content-center">
                            {{ $episodesNew->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection()
