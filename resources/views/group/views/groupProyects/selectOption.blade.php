<div class="row">
    <div class="col-3">
        <label>Tipo:</label>
    </div>
    <div class="col-3">
        <select class="filter-select form-control extendSelect" data-btn-class="btn-primary btn-block" id="type">
            <option value="" selected>{{ __('Ver todo') }}</option>
            <option value="Manga">{{ __('Manga') }}</option>
            <option value="Manhua">{{ __('Manhua') }}</option>
            <option value="Manhwa">{{ __('Manhwa') }}</option>
            <option value="Novel">{{ __('Novela') }}</option>
            <option value="One shot">{{ __('One shot') }}</option>
            <option value="Doujinshi">{{ __('Doujinshi') }}</option>
            <option value="Oel">{{ __('Oel') }}</option>
        </select>
    </div>
    <div class="col-3">
        <label>{{ __('Estado:') }}</label>
    </div>
    <div class="col-3">
        <select class="filter-select form-control extendSelect" data-btn-class="btn-primary btn-block" id="status">
            <option value="" selected>{{ __('Ver todo') }}</option>
            <option value="Publicándose">{{ __('Publicándose') }}</option>
            <option value="Pausado">{{ __('Pausado') }}</option>
            <option value="Terminado">{{ __('Terminado') }}</option>
            <option value="Abandonado">{{ __('Abandonado') }}</option>
        </select>
    </div>
</div>
