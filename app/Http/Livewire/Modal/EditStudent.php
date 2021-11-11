<?php

namespace App\Http\Livewire\Modal;

use App\Models\student;
use Livewire\Component;

class EditStudent extends Component
{
    public $addStudent = false;
    public $first_nm;
    public $last_nm;
    public $dob;
    public $class;
    public $phone;
    public $email;
    public $label_first_nm;
    public $label_last_nm;
    public $label_dob;
    public $label_class;
    public $label_phone;
    public $label_email;
    public $result;
    public $student;

    protected $rules = [
        'first_nm'=>'required',
        'last_nm'=>'required',
        'dob'=>'required',
        'class'=>'required',
        'phone'=>'required',
        'email'=>'required',
    ];

    public function render()
    {
        if ($this->student) {
            $student = student::where('id','=',$this->student)->first();
            $this->label_first_nm = $student->first_nm;
            $this->label_last_nm = $student->last_nm;
            $this->label_dob = $student->dob;
            $this->label_class = $student->class;
            $this->label_phone = $student->phone;
            $this->label_email = $student->email;
        }

        return view('livewire.modal.edit-student',[
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

    public function editStudent(){
        $cred = $this->validate();
        $info = student::find($this->student);

        $info->first_nm = $this->first_nm;
        $info->last_nm = $this->last_nm;
        $info->dob = $this->dob;
        $info->class = $this->class;
        $info->phone = $this->phone;
        $info->email = $this->email;
        $info->gender = 'male';
        $info->save()
            ? $this->result = 'student info updated'
            :$this->result = 'something went wrong';
    }
}
