<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';
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
        'user_id',
        'name',
        'description',
        'tablon',
        'type',
        'verified',
        'email',
        'facebook',
        'paypal',
        'twitter',
        'google+',
        'discord',
        'sitio_web',
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
        return $this->belongsTo(User::class);
    }

    //relacion hijo a padre
    public function userGroups()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->belongsToMany('App\Models\User', 'group_user', 'group_id', 'user_id')->using(GroupUser::class)->withPivot('id', 'role')->withTimestamps();
    }

    //relacion hijo a padre
    public function episodes()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->belongsToMany('App\Models\Episode', 'episode_group', 'group_id', 'episode_id')->using(EpisodeGroup::class)->withPivot('id',  'idioma', 'link_descarga', 'link_apoyo', 'date_publication')->withTimestamps();
    }

    //relacion hijo a padre
    public function mangas()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->belongsToMany('App\Models\Manga', 'group_manga', 'group_id', 'manga_id')->using(GroupManga::class)->withPivot('id', 'state', 'created_at')->withTimestamps();
    }
}
