<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EpisodeGroup extends Pivot
{
    use HasFactory;

    protected $table = 'episode_group';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = []; //usar esto si no hay validacion en los form,para crear o modificar datos

    protected $fillable = [
        'id',
        'manga_id',
        'group_id',
        'episode_id',
        'idioma',
        'link_descarga',
        'link_apoyo',
        'date_publication',
    ];

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function manga()
    {
        return $this->belongsTo(Manga::class);
    }
}
