<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>@yield('title', 'MangaC')</title>
    @include('layouts.layoutCss')
    @include('layouts.layoutJs')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>

<body>

    <div id="app" class="pb-5">
        <header>
            @if (Request::route()->getName() === 'viewCascade' || Request::route()->getName() === 'viewPaginate')
                @include('comunes._menuViewEpisode')
            @else
                @include('comunes._menu')
            @endif
            @include('comunes.toastr')
        </header>

        @yield('index')
        @yield('indexItemsPending')
        @yield('mangaShow')
        @yield('newEpisodes')
        @yield('populars')
        @yield('viewEpisode')
        @yield('profile')
        @yield('group')
        @yield('buscador')

        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>

    </div>


</body>

</html>
