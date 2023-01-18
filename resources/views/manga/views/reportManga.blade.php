<div class="col-xs-12 text-center">
    <h5>{{ __('¿Hay algo que quieras hacernos saber sobre este elemento?') }}</h5>
    <a class="text-danger" href="#" data-toggle="modal" data-target="#reportModal"><i
            class="fas fa-exclamation-circle"></i> {{ __('Reportar') }}</a>
</div>
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reportModalLabel">{{ __('Reportar elemento') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"><i class="fas fa-times"></i></span></button>
            </div>
            <form method="POST" action="https://lectortmo.com/reports/15321/file" accept-charset="UTF-8"
                class="form-horizontal-edit" id="form-report">
                <input name="_method" type="hidden" value="PUT">
                <input name="_token" type="hidden" value="EVwNO4eyZosnk0jv38fNBTR5bsV0vQ4sPewrem0u">
                <input name="host" type="hidden" value="F44 | lectortmo.com">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="type" class="control-label col-xs-12 col-sm-3">{{ __('Tipo') }}</label>
                        <div class="col-xs-12 col-sm-9">
                            <select class="form-control" required="required" id="type" name="type">
                                <option value="duplicated">{{ __('Elemento duplicado') }}</option>
                                <option value="dmca">{{ __('DMCA') }}</option>
                                <option value="bad_image">{{ __('Imagen incorrecta') }}</option>
                                <option value="incorrect_content">{{ __('Contenido incorrecto') }}</option>
                                <option value="inapropiate">{{ __('Contenido inapropiado') }}</option>
                                <option value="other">{{ __('Otro') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description"
                            class="control-label col-xs-12 col-sm-3">{{ __('Descripción') }}</label>
                        <div class="col-xs-12 col-sm-9">
                            <textarea class="form-control" minlength="15" maxlength="500"
                                placeholder="Introduzca una breve descripción sobre el motivo" style="height:150px;" required="required"
                                name="description" cols="50" rows="10" id="description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                            class="fas fa-times-circle"></i>
                        {{ __('Cancelar') }}
                    </button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> {{ __('Guardar') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
