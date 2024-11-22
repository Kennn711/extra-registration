<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $guarded = ['id'];

    function leader()
    {
        return $this->belongsTo(User::class, 'id', 'extra_id');
    }

    function members()
    {
        return $this->hasMany(Member::class, 'student_id');
    }
}
