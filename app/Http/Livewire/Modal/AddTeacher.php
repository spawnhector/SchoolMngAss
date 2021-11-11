<?php

namespace App\Http\Livewire\Modal;

use App\Models\teacher;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddTeacher extends Component
{
    public $teacher_nm;
    public $password;
    public $result;

    protected $rules = [
        'teacher_nm'=>'required'
    ];

    public function render()
    {
        return view('livewire.modal.add-teacher');
    }

    public function addTeacher(){
        $teac = $this->validate();
        $teac['status'] = '0';
        $teac['password'] = Hash::make($this->password);
        teacher::create($teac)
            ? $this->result = 'Teacher Added'
            : $this->result = 'Something went wrong';
    }
}
