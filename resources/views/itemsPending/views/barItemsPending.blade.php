<div class="row pending-items mt-2 mb-5 mx-auto">
    <div class="col-4 col-sm-3 col-md-2 pending-item watch py-2 {{ itemPending($itemsPending, 'watch') }}">
        <a href="{{ route('itemsPending', 'watch') }}">
            <i class="far fa-check-circle fa-2x fa-fw"></i>
            <span>{{ __('Leido') }}</span>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-md-2 pending-item pending py-2 {{ itemPending($itemsPending, 'pending') }}">
        <a href="{{ route('itemsPending', 'pending') }}">
            <i class="far fa-clock fa-2x fa-fw"></i>
            <span>{{ __('Pendiente') }}</span>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-md-2 pending-item follow py-2 {{ itemPending($itemsPending, 'follow') }}">
        <a href="{{ route('itemsPending', 'follow') }}">
            <i class="far fa-play-circle fa-2x fa-fw"></i>
            <span>{{ __('Siguiendo') }}</span>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-md-2 pending-item wish py-2 {{ itemPending($itemsPending, 'wish') }}">
        <a href="{{ route('itemsPending', 'wish') }}">
            <i class="far fa-heart fa-2x fa-fw"></i>
            <span>{{ __('Favorito') }}</span>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-md-2 pending-item have py-2 {{ itemPending($itemsPending, 'have') }}">
        <a href="{{ route('itemsPending', 'have') }}">
            <i class="far fa-check-square fa-2x fa-fw"></i>
            <span>{{ __('Lo tengo') }}</span>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-md-2 pending-item abandoned py-2 {{ itemPending($itemsPending, 'abandoned') }}">
        <a href="{{ route('itemsPending', 'abandoned') }}">
            <i class="far fa-thumbs-down fa-2x fa-fw"></i>
            <span>{{ __('Abandonado') }}</span>
        </a>
    </div>
</div>
