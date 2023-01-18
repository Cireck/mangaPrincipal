<form id="form-filters">
    <div class="card mt-2">
        @include('buscador.views.mangas.filtrosForm')
    </div>
    <div class="card mt-2">
        @include('buscador.views.mangas.generosForm')
    </div>
    <div class="card mt-2">
        @include('buscador.views.mangas.excluirGenerosForm')
    </div>
    <button class="btn btn-primary btn-block btn-lg mt-2" type="submit"><i class="fas fa-filter fa-fw"></i>
        {{ __('Aplicar filtros') }}</button>
</form>
