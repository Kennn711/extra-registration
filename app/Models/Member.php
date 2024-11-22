<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = ['id'];

    function extra()
    {
        return $this->belongsTo(Extra::class, 'student_id');
    }

    function user()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
}
