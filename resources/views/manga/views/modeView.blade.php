@if (Auth::user())
    @if (auth()->user()->profile->mode_view === 2)
        <a href="{{ route('viewCascade', $id) }}" class="btn btn-default btn-sm">
            <span class="fas fa-play fa-2x" style="color:#2957ba"></span>
        </a>
    @elseif ($manga->type === 'Manhua' || $manga->type === 'Manhwa')
        <a href="{{ route('viewCascade', $id) }}" class="btn btn-default btn-sm">
            <span class="fas fa-play fa-2x" style="color:#2957ba"></span>
        </a>
    @else
        <a href="{{ route('viewPaginate', $id) }}" class="btn btn-default btn-sm">
            <span class="fas fa-play fa-2x" style="color:#2957ba"></span>
        </a>
    @endif
@else
    @if ($manga->type === 'Manhua' || $manga->type === 'Manhwa')
        <a href="{{ route('viewCascade', $id) }}" class="btn btn-default btn-sm">
            <span class="fas fa-play fa-2x" style="color:#2957ba"></span>
        </a>
    @else
        <a href="{{ route('viewPaginate', $id) }}" class="btn btn-default btn-sm">
            <span class="fas fa-play fa-2x" style="color:#2957ba"></span>
        </a>
    @endif
@endif
