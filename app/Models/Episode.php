<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $table = 'episodes';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = [];//usar esto si no hay validacion en los form,para crear o modificar datos

    protected $fillable = [
        'id',
        'episode',
        'volumen',
        'title',
        'view',
        'manga_id',


    ];

    public function getRouteKeyName()
    {
        //return 'title'; // TODO: Change the autogenerated stub
        return 'id';//atributo de la tabla para que se realice la consulta
    }

    //relacion entre padre e hijo
    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'episode_group', 'episode_id', 'group_id')->using(EpisodeGroup::class)->withPivot('id',  'idioma', 'link_descarga', 'link_apoyo', 'date_publication')->withTimestamps();
    }

    //relacion entre padre e hijo
    public function manga()
    {
        return $this->belongsTo(Manga::class);

    }

    //relacion hijo a padre
    public function reportE()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->hasOne(Report::class);

    }


}
