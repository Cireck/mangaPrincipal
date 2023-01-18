<div class="row mt-2">
    <div class="col-12">
        <h2 class="group-color">{{ __('Últimos proyectos') }}</h2>
    </div>
    @include('group.lists.listMangasGroup', ['mangas' => $mangasUltimos, 'metodoList' => 'lastProyects'])
    <div class="espacio5"></div>
    <div class="col-12 text-center">
        <a href="{{ route('groupProyects', $group) }}"><i class="fas fa-book fa-fw"></i> {{ __('Ver todo') }}</a>
    </div>
</div>
