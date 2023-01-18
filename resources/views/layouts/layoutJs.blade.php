{{-- javscript --}}
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script defer src="{{ asset('fontawesome/js/all.js') }}"></script>
<script src="{{ asset('js/toastr/toastr.min.js') }}"></script>

@if (Request::route()->getName() === 'index')
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
@endif

@if (Request::route()->getName() === 'mangaShow')
    @include('manga.scripts.scriptManga')
    <script type="text/javascript" src="{{ asset('js/mangaShow.js') }}"></script>
@endif

@if (Request::route()->getName() === 'viewCascade' || Request::route()->getName() === 'viewPaginate')
    <script type="text/javascript" src="{{ asset('js/viewEpisode.js') }}"></script>
@endif

@if (Request::route()->getName() === 'profile' ||
    Request::route()->getName() === 'profileEdit' ||
    Request::route()->getName() === 'profileMyGroups')
    @include('profile.scripts.scriptProfile')
    <script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>
@endif

@if (Request::route()->getName() === 'groupShow' || Request::route()->getName() === 'groupProyects')
    @include('group.scripts.scriptGroup')
    <script type="text/javascript" src="{{ asset('js/groupShow.js') }}"></script>
@endif

@if (Request::route()->getName() === 'buscador')
    @include('buscador.scripts.scriptBuscador')
    <script type="text/javascript" src="{{ asset('js/buscador.js') }}"></script>
@endif

@if (Request::route()->getName() === 'buscadorGroup')
    @include('buscadorGroup.scripts.scriptBuscadorGroup')
    <script type="text/javascript" src="{{ asset('js/buscadorGroup.js') }}"></script>
@endif
