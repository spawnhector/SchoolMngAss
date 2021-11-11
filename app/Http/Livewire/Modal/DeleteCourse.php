<?php

namespace App\Http\Livewire\Modal;

use App\Models\subject;
use Livewire\Component;

class DeleteCourse extends Component
{
    
    public $course;
    public $course_nm;
    public $result;

    public function render()
    {
        
        if ($this->course) {
            $info = subject::where('id','=',$this->course)->first();
            $this->course_nm = $info->subject_nm;
        }

        return view('livewire.modal.delete-course');
    }
    
    public function getCourse(){
        $info = subject::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }
    
    public function deleteCourse(){
        $info = subject::find($this->course);
        $info->delete()
            ? $this->result = $this->course_nm.' Deleted'
            : $this->result = 'Something went wrong';
        $this->course = '';
    }
}
