<div class="row">
    @if (Request::route()->getName() === 'profile' || Request::route()->getName() === 'profileMyGroups')
        <div class="col-12 mt-2">

            <button type="button" class="float-right btn btn-success" data-toggle="modal"
                data-target="#createGroupModal"><i class="fas fa-plus"></i> {{ __('Crear grupo') }}</button>
            <h2 class="group-color">{{ __('Mis Grupos') }}</h2>
        </div>
    @endif
    @include('profile.lists.listGroups', ['groups' => $myGroups, 'myGroups' => 'si'])
    @if (Request::route()->getName() === 'profile' || Request::route()->getName() === 'profileUser')
        <div class="col-12 mt-2">
            <a class="btn btn-block btn-primary"
                href="{{ rutaProfileMygroups(Request::route()->getName(), ['user' => $user, 'url' => $profile->url]) }}"><i
                    class="fas fa-users fa-fw"></i>
                {{ Request::route()->getName() === 'profile' ? __('Ir a Mis Grupos') : __('Ver todo') }}</a>
        </div>
    @endif

</div>
<div class="modal fade" id="createGroupModal" tabindex="-1" role="dialog" aria-labelledby="createGroupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createGroupModalLabel">{{ __('Crear grupo') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="createGroupForm" accept-charset="UTF-8" class="form-horizontal-edit">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-form-label col-12">{{ __('Nombre') }}</label>
                        <div class="col-12">
                            <input class="form-control" maxlength="255" placeholder="Introduzca el nombre del grupo"
                                required="required" name="name" type="text" id="name">
                            <div id="nameError" class="error"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label col-12">{{ __('Email') }}</label>
                        <div class="col-12">
                            <input class="form-control" maxlength="255"
                                placeholder="Introduzca el email del grupo donde recibirá notificaciones y mensajes"
                                required="required" name="email" type="email" id="email">
                            <div id="emailError" class="error"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                        {{ __('Cancelar') }}</button>
                    <button type="submit" class="btn btn-success" id="btnCreate"><i class="fas fa-save"></i>
                        {{ __('Crear') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
