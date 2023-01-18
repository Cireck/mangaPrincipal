<div class="form-row">
    <div class="col-12 col-md-10 mt-2">
        <input id="title_item" class="form-control order-select form-control-lg" placeholder="Buscar..." name="title"
            type="text" value="{{ old('search', isset($busqueda) ? $busqueda : '') }}">
    </div>
    <div class="col-4 col-md-2 mt-2">
        <button id="search_submit" class="btn btn-success btn-lg btn-block"><i class="fas fa-search fa-fw"></i></button>
    </div>
</div>
