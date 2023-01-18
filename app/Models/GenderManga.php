<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class GenderManga extends Pivot
{
    use HasFactory;

    protected $table = 'gender_manga';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = [];//usar esto si no hay validacion en los form,para crear o modificar datos

    protected $fillable = [
        'id',
        'manga_id',
        'gender_id',


    ];

    public function manga()
    {
        return $this->belongsTo(Manga::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }


}
