<?php

namespace App\Http\Livewire\Modal;

use App\Models\subject;
use Livewire\Component;

class AddCourse extends Component
{
    public $result;
    public $subject_nm;

    protected $rules = [
        'subject_nm'=>'required'
    ];

    public function render()
    {
        return view('livewire.modal.add-course');
    }

    public function addSubjcet(){
        $info = $this->validate();
        subject::create($info)
            ? $this->result = $this->subject_nm.' Added'
            :$this->result = 'Something went wrong';
    }
}
