<section class="element-header-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex element-header-bar-elements flex-row flex-wrap align-items-center">
                    <div
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 watch {{ isset($item) ? profileItemFollowing(Request::route()->getName(), $item, 'watch') : '' }}">
                        <a
                            href="{{ rutaProfileItemFollowing(Request::route()->getName(), $user, $profile->url, 'read') }}">
                            <div class="d-flex flex-wrap align-items-center h-100">
                                <div class="flex-column">
                                    <i class="element-header-bar-element-icon far fa-check-circle fa-2x fa-fw"></i>
                                </div>
                                <div class="flex-column">
                                    <span class="element-header-bar-element-number">{{ __('Ver') }}</span>
                                    <small class="element-header-bar-element-title">{{ __('Leido') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 pending {{ isset($item) ? profileItemFollowing(Request::route()->getName(), $item, 'pending') : '' }}">
                        <a
                            href="{{ rutaProfileItemFollowing(Request::route()->getName(), $user, $profile->url, 'pending') }}">
                            <div class="d-flex flex-wrap align-items-center h-100">
                                <div class="flex-column">
                                    <i class="element-header-bar-element-icon far fa-clock fa-2x fa-fw"></i>
                                </div>
                                <div class="flex-column">
                                    <span class="element-header-bar-element-number">{{ __('Ver') }}</span>
                                    <small class="element-header-bar-element-title">{{ __('Pendiente') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 follow {{ isset($item) ? profileItemFollowing(Request::route()->getName(), $item, 'follow') : '' }}">
                        <a
                            href="{{ rutaProfileItemFollowing(Request::route()->getName(), $user, $profile->url, 'follow') }}">
                            <div class="d-flex flex-wrap align-items-center h-100">
                                <div class="flex-column">
                                    <i class="element-header-bar-element-icon far fa-play-circle fa-2x fa-fw"></i>
                                </div>
                                <div class="flex-column">
                                    <span class="element-header-bar-element-number">{{ __('Ver') }}</span>
                                    <small class="element-header-bar-element-title">{{ __('Siguiendo') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 wish {{ isset($item) ? profileItemFollowing(Request::route()->getName(), $item, 'wish') : '' }}">
                        <a
                            href="{{ rutaProfileItemFollowing(Request::route()->getName(), $user, $profile->url, 'wish') }}">
                            <div class="d-flex flex-wrap align-items-center h-100">
                                <div class="flex-column">
                                    <i class="element-header-bar-element-icon far fa-heart fa-2x fa-fw"></i>
                                </div>
                                <div class="flex-column">
                                    <span class="element-header-bar-element-number">{{ __('Ver') }}</span>
                                    <small class="element-header-bar-element-title">{{ __('Favorito') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 have {{ isset($item) ? profileItemFollowing(Request::route()->getName(), $item, 'have') : '' }}">
                        <a
                            href="{{ rutaProfileItemFollowing(Request::route()->getName(), $user, $profile->url, 'have') }}">
                            <div class="d-flex flex-wrap align-items-center h-100">
                                <div class="flex-column">
                                    <i class="element-header-bar-element-icon far fa-check-square fa-2x fa-fw"></i>
                                </div>
                                <div class="flex-column">
                                    <span class="element-header-bar-element-number">{{ __('Ver') }}</span>
                                    <small class="element-header-bar-element-title">{{ __('Lo tengo') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 abandoned {{ isset($item) ? profileItemFollowing(Request::route()->getName(), $item, 'abandoned') : '' }}">
                        <a
                            href="{{ rutaProfileItemFollowing(Request::route()->getName(), $user, $profile->url, 'abandoned') }}">
                            <div class="d-flex flex-wrap align-items-center h-100">
                                <div class="flex-column">
                                    <i class="element-header-bar-element-icon far fa-thumbs-down fa-2x fa-fw"></i>
                                </div>
                                <div class="flex-column">
                                    <span class="element-header-bar-element-number">{{ __('Ver') }}</span>
                                    <small class="element-header-bar-element-title">{{ __('Abandonado') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
