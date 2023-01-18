<div class="row mt-2">
    <div class="col-12">
        <h2 class="group-color">{{ __('Últimas subidas') }}</h2>
    </div>
    <div class="col">
        <div class="table-responsive">
            <table class="table table-hover table-light">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="text-center" style="width: 15%;">{{ __('Tipo') }}</th>
                        <th scope="col" style="width: 25%;">{{ __('Título') }}</th>
                        <th scope="col" class="text-center" style="width: 15%;">{{ __('Capítulo') }}</th>
                        <th scope="col" class="text-center" style="width: 10%;">{{ __('Popularidad') }}</th>
                        <th scope="col" class="text-center" style="width: 15%;">{{ __('Hace') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @include('group.lists.listLastEpisodesGroup')
                    
                </tbody>
            </table>
        </div>
    </div>
</div>