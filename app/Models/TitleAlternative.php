<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitleAlternative extends Model
{
    use HasFactory;
    protected $table = 'title_alternatives';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $guarded = [];//usar esto si no hay validacion en los form,para crear o modificar datos

    protected $fillable = [
        'id',
        'title',
        'manga_id',
    ];

    //relacion hijo a padre
    public function manga()
    {
        //belongsTo significa pertence a ala tabla padre o otra tabla en relacion que tenga
        return $this->belongsTo(Manga::class);

    }
}
