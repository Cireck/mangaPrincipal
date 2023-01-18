<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    protected $table = 'mangas';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $guarded = []; //usar esto si no hay validacion en los form,para crear o modificar datos
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'sub_name',
        'description',
        'score',
        'state',
        //'synonyms',
        'type',
        'view',
        'demography',
        'webcomic',
        'yonkowa',
        'amateur',
        'erotic',
        'url',

    ];

    public function getRouteKeyName()
    {
        return 'url'; //atributo de la tabla para que se realice la consulta
    }

    //relacion hijo a padre
    public function user()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->belongsToMany('App\Models\User', 'manga_user', 'manga_id', 'user_id')->using(MangaUser::class)->withPivot('id', 'type', 'last_episode', 'like')->withTimestamps();
    }

    //relacion hijo a padre
    public function episodes()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->hasMany(Episode::class);
    }

    //relacion hijo a padre
    public function genders()
    {
        return $this->belongsToMany('App\Models\Gender', 'gender_manga', 'manga_id', 'gender_id')->using(GenderManga::class)->withTimestamps();
    }

    //relacion hijo a padre
    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'group_manga', 'manga_id', 'group_id')->using(GroupManga::class)->withPivot('id', 'state', 'created_at')->withTimestamps();
    }

    //relacion hijo a padre
    public function titles()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->hasMany(TitleAlternative::class);
    }

    //relacion hijo a padre
    public function reportM()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->hasOne(Report::class);
    }

    //relacion hijo a padre para obtener los mangas padres
    public function mangapS()
    {
        return $this->belongsToMany('App\Models\Manga', 'manga_manga', 'manga_id_p', 'manga_id_h')->using(MangaManga::class)->withPivot('id')->withTimestamps();
    }

    //relacion hijo a padre para obtener los mangas hijos
    public function mangahS()
    {
        return $this->belongsToMany('App\Models\Manga', 'manga_manga', 'manga_id_h', 'manga_id_p')->using(MangaManga::class)->withPivot('id')->withTimestamps();
    }
}
