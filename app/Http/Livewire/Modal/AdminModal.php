<?php

namespace App\Http\Livewire\Modal;

use App\Models\student;
use App\Models\subject;
use App\Models\subjectChoice;
use Livewire\Component;

class AdminModal extends Component
{
    public $addStudent = false;
    public $first_nm;
    public $last_nm;
    public $dob;
    public $class;
    public $phone;
    public $email;
    public $result;
    public $subject;

    protected $rules = [
        'first_nm'=>'required',
        'last_nm'=>'required',
        'dob'=>'required',
        'phone'=>'required',
        'email'=>'required',
    ];

    public function render()
    {
        return view('livewire.modal.admin-modal',[
            'modal'=>$this
        ]);
    }

    public function addStudent(){
        $this->addStudent = true;
    }

    public function addToStudent(){
        $cred = $this->validate();
        $cred['gender'] = 'male';
        $cred['subject_id'] = $this->subject;
        student::create($cred)
            ? $this->result = 'student added'
            :$this->result = 'something went wrong';
    }
    
    public function getCourse(){
        $info = subject::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }

}
