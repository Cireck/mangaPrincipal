<section class="element-header-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex element-header-bar-elements flex-row flex-wrap align-items-center">
                    <div id="itemPending"
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 {{ empty($userManga) ? '' : itemPending($userManga->type, 'watch') }} watch "
                        data-status="watch">
                        <div class="d-flex flex-wrap align-items-center h-100">
                            <div class="flex-column">
                                <i class="element-header-bar-element-icon far fa-check-circle fa-2x fa-fw"></i>
                            </div>
                            <div class="flex-column">
                                <span class="element-header-bar-element-number">{{ $totalWatch }}</span>
                                <small class="element-header-bar-element-title">{{ __('Leido') }}</small>
                            </div>
                        </div>
                    </div>
                    <div id="itemPending"
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 pending {{ empty($userManga) ? '' : itemPending($userManga->type, 'pending') }}"
                        data-status="pending">
                        <div class="d-flex flex-wrap align-items-center h-100">
                            <div class="flex-column">
                                <i class="element-header-bar-element-icon far fa-clock fa-2x fa-fw"></i>
                            </div>
                            <div class="flex-column">
                                <span class="element-header-bar-element-number">{{ $totalPending }}</span>
                                <small class="element-header-bar-element-title">{{ __('Pendiente') }}</small>
                            </div>
                        </div>
                    </div>
                    <div id="itemPending"
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 follow {{ empty($userManga) ? '' : itemPending($userManga->type, 'follow') }}"
                        data-status="follow">
                        <div class="d-flex flex-wrap align-items-center h-100">
                            <div class="flex-column">
                                <i class="element-header-bar-element-icon far fa-play-circle fa-2x fa-fw"></i>
                            </div>
                            <div class="flex-column">
                                <span class="element-header-bar-element-number">{{ $totalFollow }}</span>
                                <small class="element-header-bar-element-title">{{ __('Siguiendo') }}</small>
                            </div>
                        </div>
                    </div>
                    <div id="itemPending"
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 wish {{ empty($userManga) ? '' : itemPending($userManga->type, 'wish') }}"
                        data-status="wish">
                        <div class="d-flex flex-wrap align-items-center h-100">
                            <div class="flex-column">
                                <i class="element-header-bar-element-icon far fa-heart fa-2x fa-fw"></i>
                            </div>
                            <div class="flex-column">
                                <span class="element-header-bar-element-number">{{ $totalWish }}</span>
                                <small class="element-header-bar-element-title">{{ __('Favorito') }}</small>
                            </div>
                        </div>
                    </div>
                    <div id="itemPending"
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 have {{ empty($userManga) ? '' : itemPending($userManga->type, 'have') }}"
                        data-status="have">
                        <div class="d-flex flex-wrap align-items-center h-100">
                            <div class="flex-column">
                                <i class="element-header-bar-element-icon far fa-check-square fa-2x fa-fw"></i>
                            </div>
                            <div class="flex-column">
                                <span class="element-header-bar-element-number">{{ $totalHave }}</span>
                                <small class="element-header-bar-element-title">{{ __('Lo tengo') }}</small>
                            </div>
                        </div>
                    </div>
                    <div id="itemPending"
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 abandoned {{ empty($userManga) ? '' : itemPending($userManga->type, 'abandoned') }}"
                        data-status="abandoned">
                        <div class="d-flex flex-wrap align-items-center h-100">
                            <div class="flex-column">
                                <i class="element-header-bar-element-icon far fa-thumbs-down fa-2x fa-fw"></i>
                            </div>
                            <div class="flex-column">
                                <span class="element-header-bar-element-number">{{ $totalAbandoned }}</span>
                                <small class="element-header-bar-element-title">{{ __('Abandonado') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
