@forelse($miembros as $miembro)
    <div class="col-6 mt-2">
        <a class="group-link"
            href="{{ route('profileUser', ['user' => $miembro, 'url' => $miembro->profile->url]) }}" id="users"
            data-status="{{ $miembro->profile->url }}" data-view="{{ $miembro->profile->profile_view }}">
            <div class="card">
                @if (Storage::disk('local')->exists('public/profiles/' . $miembro->profile->id . '.jpg'))
                    <img class="card-img-top " src="{{ asset('storage/profiles/' . $miembro->profile->id . '.jpg') }}"
                        alt="{{ $miembro->profile->nick }}">
                @else
                    <img class="card-img-top " src="{{ asset('storage/imagenes/default-avatar.jpg') }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title group-link">{{ $miembro->profile->nick }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted group-link">{{ $miembro->pivot->role }}</h6>
                </div>
            </div>
        </a>
    </div>
@empty
    <div class="col-12 text-center my-5">
        <h3 class="text-dark"><i class="fas fa-times fa-5x"></i></h3>
        <h5>No hay elementos</h5>
    </div>
@endforelse
