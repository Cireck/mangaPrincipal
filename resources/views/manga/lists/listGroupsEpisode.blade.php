<div class="card chapter-list-element">
    <ul class="list-group list-group-flush chapter-list">
        <li class="list-group-item">
            <div class="row">
                @forelse($groups as $group)
                    @if ($group->pivot->date_publication < date('Y-m-d H:i:s'))
                        <div class="col-4 col-md-6 text-truncate">
                            <span class="">
                                <a href="#">{{ $group->name }}</a>
                            </span>
                        </div>
                        <div class="col-4 col-md-2 text-center">
                            <span class="badge badge-primary p-2"><i class="fas fa-calendar fa-fw"></i>
                                {{ date('Y-m-d', strtotime($group->pivot->date_publication)) }}</span>
                        </div>
                        <div class="col-2 col-sm-1 text-center">
                            <i class="flag-icon flag-icon-es"></i>
                        </div>
                        <div class="d-none d-sm-block col-sm-1 text-center">
                        </div>
                        <div class="d-none d-sm-block col-sm-1 text-center">
                        </div>
                        <div class="col-2 col-sm-1 text-right">
                            @include('manga..views.modeView', [
                                'id' => $group->pivot->id,
                                'manga' => $manga,
                            ])
                        </div>
                    @endif
                @empty
                    <div class="col-4 col-md-6 text-truncate">
                        <span class="">
                            <a href="#">Actualmente no hay grupos</a>
                        </span>
                    </div>
                @endforelse
            </div>
        </li>
    </ul>
</div>
