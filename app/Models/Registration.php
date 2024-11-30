<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $guarded = ['id'];

    function user()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    function extra()
    {
        return $this->belongsTo(Extra::class, 'extra_id');
    }
}
