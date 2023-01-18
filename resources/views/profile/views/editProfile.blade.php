<div class="col-12">
    <h2 class="group-color">{{ __('Editar Información') }}</h2>
</div>
<div class="col-12">
    <form accept-charset="UTF-8" class="form-horizontal-edit" enctype="multipart/form-data" id="editProfileForm">
        @csrf
        <div class="form-group row">
            <label for="username" class="col-form-label col-12 col-sm-3">{{ __('Nick') }}</label>
            <div class="col-12 col-sm-9">
                <input class="form-control" maxlength="255" placeholder="{{ __('Introduzca su nombre de usuario') }}"
                    name="username" type="text" value="{{old('nick',$profile->nick)}}" id="username">
                <div id="usernameError" class="error"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="avatar" class="col-form-label col-12 col-sm-3">{{ __('Avatar') }}</label>
            <div class="col-12 col-sm-9">
                <input class="form-control" placeholder="Seleccione la imagen de avatar deseada" name="avatar"
                    type="file" id="avatar">
                <p class="help-block">{{ __('La imagen debe ser jpg o png. Dimensiones mínimas: 300px x 300px
                    (Relación de
                    aspecto 1/1. Ej: 300x300,350x350,...). Máximo 1MB.') }}</p>
                <div id="avatarError" class="error"></div>
            </div>
        </div>
        @include('profile.views.formSelectCountry')
        <div class="form-group row">
            <label for="gender" class="col-form-label col-12 col-sm-3">{{ __('Género') }}</label>
            <div class="col-12 col-sm-3">
                <select class="form-control" id="gender" name="gender">
                    <option selected="selected" value="">{{ __('Seleccione su género') }}</option>
                    <option value="M" @if('M'==old('gender',$profile->gender)) selected @endif>{{ __('Masculino') }}
                    </option>
                    <option value="F" @if('F'==old('gender',$profile->gender)) selected @endif>{{ __('Femenino') }}
                    </option>
                </select>
                <div id="genderError" class="error"></div>
            </div>
            <label for="birthday" class="col-form-label col-12 col-sm-3">{{ __('Cumpleaños') }}</label>
            <div class="col-12 col-sm-3">
                <input class="form-control" placeholder="Seleccione su fecha de nacimiento" name="birthday" type="date"
                    id="birthday" value="{{old('birthday',$profile->birthday)}}">
                <div id="birthdayError" class="error"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="facebook" class="col-form-label col-12 col-sm-3">{{ __('Facebook') }}</label>
            <div class="col-12 col-sm-9">
                <input class="form-control" maxlength="255" placeholder="Introduzca la url de su perfil de Facebook"
                    name="facebook" type="text" id="facebook" value="{{old('facebook',$profile->facebook)}}">
                <div id="facebookError" class="error"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="twitter" class="col-form-label col-12 col-sm-3">{{__('Twitter')}}</label>
            <div class="col-12 col-sm-9">
                <input class="form-control" maxlength="255" placeholder="Introduzca la url de su perfil de Twitter"
                    name="twitter" type="text" id="twitter" value="{{old('twitter',$profile->twitter)}}">
                <div id="twitterError" class="error"></div>
            </div>
        </div>
        {{--
        <div class="form-group row">
            <label for="vkontakte" class="col-form-label col-12 col-sm-3">VKontakte</label>
            <div class="col-12 col-sm-9">
                <input class="form-control" maxlength="255" placeholder="Introduzca la url de su perfil de VKontakte"
                    name="vkontakte" type="text" id="vkontakte">
            </div>
            <div id="usernameError" class="error"></div>
        </div>
        --}}
        <div class="form-group row">
            <label for="web" class="col-form-label col-12 col-sm-3">{{ __('Sitio web') }}</label>
            <div class="col-12 col-sm-9">
                <input class="form-control" maxlength="255" placeholder="Introduzca la url de su web" name="web"
                    type="text" id="web" value="{{old('sitio_web',$profile->sitio_web)}}">
                <div id="webError" class="error"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="web" class="col-form-label col-12 col-sm-3">{{ __('Perfil público') }}</label>
            <div class="col-12 col-sm-9">
                <select class="form-control" name="profileView" id="profileView">
                    <option value="0" @if('0'==old('profile_view',$profile->profile_view)) selected @endif>{{
                        __('¿Pueden los usuarios ver tu perfil?') }}</option>
                    <option value="1" @if('1'==old('profile_view',$profile->profile_view)) selected @endif>{{ __('Si')
                        }}</option>
                    <option value="2" @if('2'==old('profile_view',$profile->profile_view)) selected @endif>{{ __('No')
                        }}</option>
                </select>
                <div id="profileViewError" class="error"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="cascadeMode" class="col-form-label col-12 col-sm-3">{{ __('Modo visor') }}</label>
            <div class="col-12 col-sm-9">
                <select class="form-control" id="modeView" name="modeView">
                    <option value="0" @if('0'==old('mode_view',$profile->mode_view)) selected @endif>{{ __('Por
                        defecto') }}
                    </option>
                    <option value="1" @if('1'==old('mode_view',$profile->mode_view)) selected @endif>{{ __('Paginado')
                        }}</option>
                    <option value="2" @if('2'==old('mode_view',$profile->mode_view)) selected @endif>{{ __('Cascada') }}
                    </option>
                </select>
                <div id="modeViewError" class="error"></div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12 col-sm-4 offset-sm-2">
                <a class="btn btn-danger btn-block" href="{{ route('profile') }}"><i class="fas fa-times"></i>
                    {{ __('Cancelar') }}</a>
            </div>
            <div class="col-12 col-sm-4">
                <button class="btn btn-success btn-block" type="submit" id="btnEditProfile"><i class="fas fa-save"></i>
                    {{ __('Guardar')
                    }}</button>
            </div>
        </div>
    </form>
</div>
