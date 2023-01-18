@forelse($lastEpisodes as $episode)
    <tr>
        <td scope="row" class="text-center">
            <a href="{{ route('mangaShow', $episode->manga) }}"><span
                    class="badge {{ typeManga($episode->manga->type) }}">{{ $episode->manga->type }}</span></a>
        </td>
        <td scope="row">
            <a href="{{ route('mangaShow', $episode->manga) }}">
                <div data-toggle="tooltip" title="{{ $episode->manga->name }}">
                    <span>{{ __($episode->manga->name) }}</span>
                </div>
            </a>
        </td>
        <td scope="row" class="text-center">
            <a href="{{ route('mangaShow', $episode->manga) }}">{{ $episode->episode }}</a>
        </td>
        <td scope="row" class="text-center">
            <a href="{{ route('mangaShow', $episode->manga) }}">
                <div class="gauge gauge-small gauge-red">
                    <div class="gauge-arrow" data-percentage="8" style="transform: rotate(-75.6deg);">
                    </div>
                </div>
            </a>
        </td>
        <td scope="row" class="text-center">
            <a href="{{ route('mangaShow', $episode->manga) }}">{{ $episode->created_at->diffForhumans() }}</a>
        </td>
    </tr>
@empty
    <div class="col-12 text-center my-5">
        <h3 class="text-dark"><i class="fas fa-times fa-5x"></i></h3>
        <h5>No hay elementos</h5>
    </div>
@endforelse
