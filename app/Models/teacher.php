<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class teacher extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'teacher_nm',
        'status',
        'password',
    ];

    public function subject(){
        return $this->hasMany(teacher_subject::class,'teacher_id');
    }
}
