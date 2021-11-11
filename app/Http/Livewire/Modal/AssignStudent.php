<?php

namespace App\Http\Livewire\Modal;

use App\Models\student;
use App\Models\teacher;
use App\Models\teacher_student;
use Livewire\Component;

class AssignStudent extends Component
{
    
    public $teacher;
    public $student;
    public $student_nm;
    public $result;
    public $teacher_nm;
    
    public function render()
    {
        if ($this->teacher) {
            $info = teacher::where('id','=',$this->teacher)->first();
            $this->teacher_nm = $info->teacher_nm;
        }

        if ($this->student) {
            $info = student::where('id','=',$this->student)->first();
            $this->student_nm = $info->first_nm;
        }
        return view('livewire.modal.assign-student');
    }
    
    public function getTeacher(){
        $info = teacher::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function getStudent(){
        $info = student::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function assignStudent(){
        teacher_student::create([
            'teacher_id'=>$this->teacher,
            'student_id'=>$this->student
        ])
        ? $this->result =  $this->student_nm.' assigned to '.$this->teacher_nm."'s account."
        : $this->result = 'something went wrong!';
    }
}
