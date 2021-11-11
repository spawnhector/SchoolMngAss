<?php

namespace App\Http\Livewire\Modal;

use App\Models\teacher;
use Livewire\Component;

class DeleteTeacher extends Component
{
    public $teacher;
    public $result;
    public $teacher_nm;

    public function render()
    {
        if ($this->teacher) {
            $teacher = teacher::where('id','=',$this->teacher)->first();
            $this->teacher_nm = $teacher->teacher_nm;
        }
        return view('livewire.modal.delete-teacher');
    }

    public function getTeacher(){
        $info = teacher::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function deleteAcc(){
        $info = teacher::find($this->teacher);
        $info->delete()
            ? $this->result = 'Account Deleted'
            : $this->result = 'Something went wrong';
        $this->teacher = '';
    }
}
