<div class="col-12 col-md-3 text-center">
    <h1 class="book-type {{ typeManga($manga->type) }} mt-4 text-uppercase">{{ $manga->type }}</h1>
    <div class="element-image my-2">
        <div class="score">
            <i class="fas fa-star fa-fw"></i>
            <span>{{ $manga->score }}</span>
        </div>
        <div class="demography {{ demographyManga($manga->demography) }}"
            title="{{ $manga->demography }}: {{ __(demographyDescription($manga->demography)) }}">
            {{ $manga->demography }}
        </div>
        <div class="like_buttons">
            <div id="vote" class="user-like-btn like_btn" data-vote="like"><i class="far fa-thumbs-up fa-2x"></i></div>
            <div id="vote" class="user-like-btn dislike_btn" data-vote="dislike"><i class="far fa-thumbs-down fa-2x"></i>
            </div>
            <div class="like_bar">
                <div class="like_bar_like" style="width: {{ $porcentajeLike }}%"></div>
                <div class="like_bar_dislike" style="width: {{ $porcentajeDislike }}%"></div>
            </div>
        </div>
        @if (Storage::disk('local')->exists('public/Manga/' . $manga->id . '/' . $manga->id . '.jpg'))
            <img class="book-thumbnail" src="{{ asset('storage/Manga/' . $manga->id . '/' . $manga->id . '.jpg') }}">
        @else
            <img class="book-thumbnail" src="{{ asset('storage/imagenes/no-image.png') }}">
        @endif
    </div>
</div>
