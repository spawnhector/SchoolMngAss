<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\student;
use Livewire\Component;

class Viewallstudent extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.viewallstudent',[
            'allStud'=>$this
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
}
