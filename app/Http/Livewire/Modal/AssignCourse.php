<?php

namespace App\Http\Livewire\Modal;

use App\Models\subject;
use App\Models\teacher;
use App\Models\teacher_subject;
use Livewire\Component;

class AssignCourse extends Component
{
    
    public $teacher;
    public $course;
    public $course_nm;
    public $result;
    public $teacher_nm;

    public function render()
    {
        if ($this->teacher) {
            $info = teacher::where('id','=',$this->teacher)->first();
            $this->teacher_nm = $info->teacher_nm;
        }

        if ($this->course) {
            $info = subject::where('id','=',$this->course)->first();
            $this->course_nm = $info->subject_nm;
        }

        return view('livewire.modal.assign-course');
    }

    public function getTeacher(){
        $info = teacher::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function getCourse(){
        $info = subject::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function assignCourse(){
        teacher_subject::create([
            'teacher_id'=>$this->teacher,
            'subject_id'=>$this->course
        ])
        ? $this->result =  $this->course_nm.' assigned to '.$this->teacher_nm."'s account."
        : $this->result = 'something went wrong!';
    }
}
