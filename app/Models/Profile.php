<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = []; //usar esto si no hay validacion en los form,para crear o modificar datos

    protected $fillable = [
        'id',
        'user_id',
        'nick',
        'email',
        'country',
        'gender',
        'birthday',
        'facebook',
        'twitter',
        'sitio_web',
        'profile_view',
        'mode_view',
        'url'
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
}
