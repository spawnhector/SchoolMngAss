<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'first_nm',
        'last_nm',
        'dob',
        'phone',
        'email',
        'gender',
    ];
}
