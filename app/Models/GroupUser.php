<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class GroupUser extends Pivot
{
    use HasFactory;

    protected $table = 'group_user';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = []; //usar esto si no hay validacion en los form,para crear o modificar datos

    protected $fillable = [
        'id',
        'group_id',
        'user_id',
        'role',
        'follow',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
