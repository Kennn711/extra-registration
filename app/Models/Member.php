<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = ['id'];

    public function extra()
    {
        return $this->belongsTo(Extra::class, 'student_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'extra_id', 'extra_id')->where('role', 'leader');
    }
}
