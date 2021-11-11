<?php

namespace App\Http\Livewire\Modal;

use App\Models\teacher;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EditTeacher extends Component
{
    public $teacher;
    public $result;
    public $teacher_nm;
    public $label_teacher_nm;
    public $password;

    protected $rules = [
        'teacher_nm'=>'required'
    ];

    public function render()
    {
        if ($this->teacher) {
            $teacher = teacher::where('id','=',$this->teacher)->first();
            $this->label_teacher_nm = $teacher->teacher_nm;
        }
        return view('livewire.modal.edit-teacher');
    }

    public function getTeacher(){
        $info = teacher::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

    public function editTeacher(){
        $cred = $this->validate();
        $info = teacher::find($this->teacher);
        $info->teacher_nm = $this->teacher_nm;
        $info->status = '0';
        $info->password =  Hash::make($this->password);
        $info->save()
            ? $this->result = 'Teacher Updated'
            : $this->result = 'Something went wrong';

    }
}
