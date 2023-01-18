@extends('layouts.layout')
@section('title', $group->name . ' - ' . $group->type . ' - MangaC')
@section('group')
    <section class="element">
        <header class="container-fluid element-header scanlation">
            @include('group.views.headerGroup')
        </header>
        <main role="main" class="container-fluid element-body">
            <div class="container p-0 p-sm-2">
                <div class="espacio10"></div>
                <div class="row">
                    <div class="col offset-md-8 md-4">
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <a href="{{ $group->facebook }}" class="btn btn-social btn-stroke btn-facebook mx-1"
                                target="_blank" rel="me nofollow"><i class="fab fa-fw fa-facebook-f"></i></a>
                            <a href="{{ $group->twitter }}" class="btn btn-social btn-stroke btn-twitter mx-1"
                                target="_blank" rel="me nofollow"><i class="fab fa-fw fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        @include('group.views.tablonGroup')
                        @include('group.views.popularsGroup')
                        @include('group.views.lastProyectsGroup')
                        <div class="espacio10">
                        </div>
                        @include('group.views.lastEpisodesGroup')
                        <div class="espacio10">
                        </div>
                        @include('group.views.comentariosGroup')
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="espacio10"></div>
                        <div class="row">
                            <div id="fb-root" class=" fb_reset">
                                <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="espacio5"></div>
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ $group->email }}" target="_top" class="btn btn-block btn-primary">
                                    <h3 class="text-light"><i class="far fa-envelope fa-fw"></i> Contacto</h3>
                                </a>
                            </div>
                        </div>
                        <div class="espacio5"></div>
                        @include('group.views.miembrosGroup')

                        <div class="espacio10"></div>
                    </div>
                </div>
            </div>
        </main>
    </section>
@endsection
