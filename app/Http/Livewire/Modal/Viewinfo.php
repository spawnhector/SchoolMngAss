<?php

namespace App\Http\Livewire\Modal;

use App\Models\student;
use App\Models\subjectChoice;
use App\Models\teacher;
use App\Models\teacher_student;
use App\Models\teacher_subject;
use Livewire\Component;

class Viewinfo extends Component
{
    public $teacher_id;
    public $getStudent;

    public function render()
    {
        return view('livewire.modal.viewinfo');
    }

    public function getTeacher(){
        $info = teacher::where('id','=',$this->teacher_id)->get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function getTeacher_subject(){
        $info = teacher_subject::where('teacher_id','=',$this->teacher_id)->get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function getTeacher_student($id){
        $info = subjectChoice::where('subject_id','=',$id)->get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function getStudent(){
        dd('ye');
    }
}
