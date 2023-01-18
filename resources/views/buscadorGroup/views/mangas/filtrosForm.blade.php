<div class="card-header" id="heading-books-filters">
    <h3 class="mb-0 collapsed" data-toggle="collapse" data-target="#books-filters" aria-expanded="false"
        aria-controls="books-filters">
        <i class="indicator fas pull-right fa-chevron-right"></i>
        <button class="btn btn-link" type="button"> {{ __('Filtros') }}</button>
    </h3>
</div>
<div id="books-filters" class="collapse" aria-labelledby="heading-books-filters" style="">
    <div class="card-body">
        <div class="form-row">
            <div class="col">
                <label for="type" class="form-label"> {{ __('Tipo') }}</label>
            </div>
            <div class="col">
                <select class="filter-select form-control extendSelect" data-btn-class="btn-primary btn-block"
                    id="type" name="type" onchange="checkStatus();">
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
            <div class="col-12">
                <small>{{ __('* Necesario para filtrar por estado') }}</small>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="col">
                <label for="demography" class="form-label">{{ __('Demografía') }}</label>
            </div>
            <div class="col">
                <select name="demography" id="demography" class="form-control extendSelect select-extend"
                    data-btn-class="btn-default btn-block">
                    <option value="" data-index="0">{{ __('Ver todo') }}</option>
                    <option value="Seinen" data-index="1">{{ __('Seinen') }}</option>
                    <option value="Shoujo" data-index="2">{{ __('Shoujo') }}</option>
                    <option value="Shounen" data-index="3">{{ __('Shounen') }}</option>
                    <option value="Josei" data-index="4">{{ __('Josei') }}</option>
                    <option value="Kodomo" data-index="5">{{ __('Kodomo') }}</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="form-row" id="status_filter" style="display: none;">
            <div class="col">
                <label for="status" class="form-label">{{ __('Estado') }}</label>
            </div>
            <div class="col">
                <select class="filter-select form-control extendSelect" data-btn-class="btn-primary btn-block"
                    id="status" name="status">
                    <option value="" selected>{{ __('Ver todo') }}</option>
                    <option value="Publicándose">{{ __('Publicándose') }}</option>
                    <option value="Pausado">{{ __('Pausado') }}</option>
                    <option value="Terminado">{{ __('Terminado') }}</option>
                    <option value="Abandonado">{{ __('Abandonado') }}</option>
                </select>
            </div>
        </div>
        <hr id="status_filter_line" style="display: none;">
        <div class="form-row" id="translation_status_filter" style="display: none;">
            <div class="col">
                <label for="status" class="form-label">{{ __('Traducciones') }}</label>
            </div>
            <div class="col">
                <select name="translation_status" id="translationStatus" class="form-control extendSelect select-extend"
                    data-btn-class="btn-default btn-block">
                    <option value="" data-index="0">{{ __('Ver todo') }}</option>
                    <option value="Activo" data-index="1">{{ __('Activo') }}</option>
                    <option value="Terminado" data-index="2">{{ __('Terminado') }}</option>
                    <option value="Abandonado" data-index="3">{{ __('Abandonado') }}</option>
                </select>
            </div>
        </div>
        <hr id="translation_status_filter_line" style="display: none;">
        <div class="form-row">
            <div class="col">
                <label for="webcomic" class="form-label">{{ __('Webcomic') }}</label>
            </div>
            <div class="col">
                <select name="webcomic" id="webcomic" class="form-control extendSelect select-extend"
                    data-btn-class="btn-default btn-block">
                    <option value="" data-index="0">{{ __('Ver todo') }}</option>
                    <option value="1" data-index="1">{{ __('Si') }}</option>
                    <option value="0" data-index="2">{{ __('No') }}</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="col">
                <label for="yonkoma" class="form-label">{{ __('Yonkoma') }}</label>
            </div>
            <div class="col">
                <select name="yonkoma" id="yonkoma" class="form-control extendSelect select-extend"
                    data-btn-class="btn-default btn-block">
                    <option value="" data-index="0">{{ __('Ver todo') }}</option>
                    <option value="1" data-index="1">{{ __('Si') }}</option>
                    <option value="0" data-index="2">{{ __('No') }}</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="col">
                <label for="amateur" class="form-label">{{ __('Amateur') }}</label>
            </div>
            <div class="col">
                <select name="amateur" id="amateur" class="form-control extendSelect select-extend"
                    data-btn-class="btn-default btn-block">
                    <option value="" data-index="0">{{ __('Ver todo') }}</option>
                    <option value="1" data-index="1">{{ __('Si') }}</option>
                    <option value="0" data-index="2">{{ __('No') }}</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="col">
                <label for="erotic" class="form-label">{{ __('Erótico') }}</label>
            </div>
            <div class="col">
                <select name="erotic" id="erotic" class="form-control extendSelect select-extend"
                    data-btn-class="btn-default btn-block">
                    <option value="" data-index="0">{{ __('Ver todo') }}</option>
                    <option value="1" data-index="1">{{ __('Si') }}</option>
                    <option value="0" data-index="2">{{ __('No') }}</option>
                </select>
            </div>
        </div>
    </div>
</div>
