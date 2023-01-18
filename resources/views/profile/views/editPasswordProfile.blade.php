<div class="col-12">
    <h2 class="group-color">{{ __('Editar Contraseña') }}</h2>
</div>
<div class="col-12">
    <form accept-charset="UTF-8" class="form-horizontal-edit" id="editProfilePassForm">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-form-label col-12 col-sm-3">{{ __('Email') }}</label>
            <div class="col-12 col-sm-9">
                <input class="form-control" maxlength="255" placeholder="Introduzca su email" required="required"
                    name="email" type="text" value="{{old('email',$user->email)}}" id="email" readonly>
                <div id="emailError" class="error"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-form-label col-12 col-sm-3">{{ __('Contraseña') }}</label>
            <div class="col-12 col-sm-9">
                <input class="form-control" maxlength="255" placeholder="Introduzca su contraseña" name="password"
                    type="password" value="" id="password" aria-autocomplete="list">
                <div id="passwordError" class="error"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="passwordConfirmation" class="col-form-label col-12 col-sm-3">{{ __('Repetir Contraseña')
                }}</label>
            <div class="col-12 col-sm-9">
                <input class="form-control" maxlength="255" placeholder="Repita la contraseña introducida"
                    name="passwordConfirmation" type="password" value="" id="passwordConfirmation">
                <div id="passwordConfirmationError" class="error"></div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12 col-sm-4 offset-sm-2">
                <a class="btn btn-danger btn-block" href="{{ route('profile') }}"><i class="fas fa-times"></i>
                    {{ __('Cancelar') }}</a>
            </div>
            <div class="col-12 col-sm-4">
                <button class="btn btn-success btn-block" type="submit" id="btnEditProfilePass"><i
                        class="fas fa-save"></i> {{ __('Guardar')
                    }}</button>
            </div>
        </div>
    </form>
</div>
