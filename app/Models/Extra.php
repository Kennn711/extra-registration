<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $guarded = ['id'];

    public function leader()
    {
        return $this->belongsTo(User::class, 'id', 'extra_id');
    }

    public function members()
    {
        return $this->hasMany(Member::class, 'student_id');
    }

    public function registration()
    {
        return $this->hasMany(Registration::class, 'extra_id');
    }
}
