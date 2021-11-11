<?php

namespace App\Http\Livewire\Modal;

use App\Models\student;
use Livewire\Component;

class DeleteStudent extends Component
{
    
    public $student;
    public $student_nm;
    public $result;

    public function render()
    {
        if ($this->student) {
            $student = student::where('id','=',$this->student)->first();
            $this->student_nm = $student->first_nm;
        }
        return view('livewire.modal.delete-student',[
            'this'=>$this
        ]);
    }

    public function getStudent(){
        $info = student::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function deleteAcc(){
        $info = student::find($this->student);
        $info->delete()
            ? $this->result = 'Account Deleted'
            : $this->result = 'Something went wrong';
        $this->student = '';
    }
}
