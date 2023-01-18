<div class="row mt-2">
    @include('group.lists.listProyectsGroup', [
        'mangas' => $mangas,
    ])
</div>
<hr>
<div class="d-flex justify-content-center">
    {{ $mangas->links() }}
</div>
