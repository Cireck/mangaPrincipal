<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class MangaUser extends Pivot
{
    use HasFactory;

    protected $table = 'manga_user';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = []; //usar esto si no hay validacion en los form,para crear o modificar datos

    protected $fillable = [
        'id',
        'user_id',
        'manga_id',
        'type',
        'last_episode',
        'like',
    ];

    public function manga()
    {
        return $this->belongsTo(Manga::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
