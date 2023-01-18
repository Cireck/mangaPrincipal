<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function group()
    {
        return $this->hasOne(Group::class);
    }

    public function mangas()
    {
        //withPivot('atributo de la tabla mam')para obtener los atributos de la tabla mam durante la consulta
        return $this->belongsToMany('App\Models\Manga', 'manga_user', 'user_id', 'manga_id')->using(MangaUser::class)->withPivot('id', 'type', 'last_episode', 'like')->withTimestamps();
    }

    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'group_user', 'user_id', 'group_id')->using(GroupUser::class)->withPivot('id', 'role')->withTimestamps();
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

}
