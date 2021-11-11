<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\teacher;
use Livewire\Component;

class Viewallteacher extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.viewallteacher');
    }
    
    public function getTeacher(){
        $info = teacher::get();
        if (count($info) != 0) {
            return $info;
        } else {
            return false;
        } 
    }
}
