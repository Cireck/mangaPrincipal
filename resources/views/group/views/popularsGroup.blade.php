<div class="row mt-2">
    <div class="col-12">
        <h2 class="group-color">{{ __('Populares') }}</h2>
    </div>
    @include('group.lists.listMangasGroup',['mangas' => $mangasPopulars,'metodoList'=>'populars'])
</div>
