<div class="background"></div>
<div class="wallpaper"></div>
<div class="element-shadow"></div>
<section class="element-header-content">
    <div class="container h-100">
        <div class="row">
            <div class="col-12 col-md-3 text-center">
                <div class="group-type {{ typeGroupBg($group->type) }} mt-4">{{ $group->type }}</div>
                <div class="element-image my-2">
                    @if (Storage::disk('local')->exists('public/Groups/Logo/' . $group->id . '.jpg'))
                        <img class="group-thumbnail " src="{{ asset('storage/Groups/Logo/' . $group->id . '.jpg') }}">
                    @else
                        <img class="group-thumbnail" src="{{ asset('storage/imagenes/no-image.png') }}">
                    @endif

                </div>
            </div>
            <div class="col-12 col-md-9 element-header-content-text">
                <h1 class="element-title my-2 group-color">{{ $group->name }}</h1>
                <p class="element-description group-color">{{ $group->description }}</p>
            </div>
        </div>
    </div>
</section>
<section class="element-header-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex element-header-bar-elements flex-row flex-wrap align-items-center">
                    <div class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 follow {{ $userFollow }}"
                        id="follow-btn">
                        <div class="d-flex flex-wrap align-items-center h-100">
                            <div class="flex-column">
                                <i class="element-header-bar-element-icon fas fa-users fa-2x fa-fw"></i>
                            </div>
                            <div class="flex-column">
                                <span class="element-header-bar-element-number">{{ $totalSeguidores }}</span>
                                <small class="element-header-bar-element-title">{{ __('Seguidores') }}</small>
                            </div>
                        </div>
                    </div>
                    <div
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 proyect">
                        <a href="{{ route('groupProyects', $group) }}">
                            <div class="d-flex flex-wrap align-items-center h-100">
                                <div class="flex-column">
                                    <i class="element-header-bar-element-icon fas fa-book fa-2x fa-fw"></i>
                                </div>
                                <div class="flex-column">
                                    <span class="element-header-bar-element-number">{{ $totalProyectos }}</span>
                                    <small class="element-header-bar-element-title">{{ __('Proyectos') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="element-header-bar-element d-flex flex-wrap justify-content-center px-0 pt-2 col-4 col-md-2 upload">
                        <a href="{{ route('groupShow', $group) }}">
                            <div class="d-flex flex-wrap align-items-center h-100">
                                <div class="flex-column">
                                    <i class="element-header-bar-element-icon fas fa-upload fa-2x fa-fw"></i>
                                </div>
                                <div class="flex-column">
                                    <span class="element-header-bar-element-number">{{ $totalSubidas }}</span>
                                    <small class="element-header-bar-element-title">{{ __('Subidas') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
