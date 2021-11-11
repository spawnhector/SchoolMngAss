<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher_subject extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'teacher_id',
        'subject_id',
    ];

    public function teacher(){
        return $this->belongsTo(teacher::class,'teacher_id');
    }
    
    public function subject(){
        return $this->belongsTo(subject::class,'subject_id');
    }

    public function student(){
        return $this->belongsTo(student::class,'subject_id');
    }
}
