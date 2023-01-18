<div class="col-12 col-md-8 text-right"><span class="form-label">{{ __('Ordenar por:') }}</span></div>
<div class="col-8 col-md-2">
    <select id="order" class="order-select form-control extendSelect select-extend"
        data-btn-class="btn-default btn-block">
        <option value="alphabetically" data-index="1">{{ __('Alfabético') }}</option>
        <option value="score" data-index="2">{{ __('Puntuación') }}</option>
        <option value="creation" data-index="3">{{ __('Creación') }}</option>
        <option value="release_date" data-index="4">{{ __('Fecha estreno') }}</option>
    </select>
</div>
<div class="col-4 col-md-2">
    <select id="orderList" class="order-select form-control extendSelect select-extend text-truncate"
        data-btn-class="btn-default btn-block" aria-haspopup="true">
        <option value="asc" data-index="0">{{ __('ASC') }}</option>
        <option value="desc" selected="" data-index="1">{{ __('DESC') }}</option>
    </select>
</div>
