<div class="col-12 col-lg-8">
    <div class="espacio10"></div>
    <h2>Capítulos</h2>
    <div id="episodes">
        @empty(!$lastEpisode)
            <h3>
                {{ __('Último capítulo leído ') . $lastEpisode->episode }}
                {{ $lastEpisode->title ? ': ' . $lastEpisode->title : '' }}</h3>
            <div>
                <hr class="mx-0 my-1">
                @include('manga.lists.listGroupsEpisode', ['groups' => $lastEpisode->groups])
            </div>
        @endempty

        @if ($episodes->isNotEmpty())

            @foreach ($episodes as $episode)
                @if ($loop->first)
                    <h3>
                        {{ __('Leer primer capítulo ' . $episode->episode) }}
                        {{ $episode->title ? ': ' . $episode->title : '' }}
                    </h3>
                    <div>
                        <hr class="mx-0 my-1">
                        @include('manga.lists.listGroupsEpisode', ['groups' => $episode->groups])
                    </div>
                @endif
            @endforeach

        @endif

        @if ($episodes->isNotEmpty() && count($episodes) > 2)

            @foreach ($episodes as $episode)
                @if ($loop->last)
                    <h3> {{ __('Leer último capítulo ' . $episode->episode) }}
                        {{ $episode->title ? ': ' . $episode->title : '' }}</h3>

                    <div>
                        <hr class="mx-0 my-1">
                        @include('manga.lists.listGroupsEpisode', ['groups' => $episode->groups])
                    </div>
                @endif
            @endforeach

        @endif
    </div>

    <div class="espacio5"></div>
    <div class="box">
        <div id="listEpisodes">
            @forelse ($episodes as $episode)
                <h3> {{ __('Capítulo ' . $episode->episode) }}
                    {{ $episode->title ? ': ' . $episode->title : '' }}</h3>
                <div>
                    <hr class="mx-0 my-1">
                    @include('manga.lists.listGroupsEpisode', ['groups' => $episode->groups])
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <div class="espacio10"></div>
</div>
