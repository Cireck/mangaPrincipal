<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';
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
        'episode_id',
        'manga_id',
        'type',
        'description'
    ];

    //relacion hijo a padre
    public function user()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->belongsTo(User::class);
    }

    //relacion hijo a padre
    public function manga()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->belongsTo(Manga::class);
    }

    //relacion hijo a padre
    public function episode()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->belongsTo(Episode::class);
    }
}
