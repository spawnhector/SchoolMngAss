<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\student;
use App\Models\subjectChoice;

class Viewcourse extends Component
{
    
    public $course_id;

    public function render()
    {
        return view('livewire.modal.viewcourse');
    }

    public function getStudent(){
        $info = subjectChoice::where('subject_id','=',$this->course_id)->get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }
}
