<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class MangaManga extends Pivot
{
    use HasFactory;

    protected $table = 'manga_manga';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = []; //usar esto si no hay validacion en los form,para crear o modificar datos

    protected $fillable = [
        'id',
        'manga_id_p',
        'manga_id_h',
    ];

    public function mangaP()
    {
        return $this->belongsTo(Manga::class, 'manga_id_p', 'id');
    }

    public function mangaH()
    {
        return $this->belongsTo(Manga::class, 'manga_id_h', 'id');
    }
}
