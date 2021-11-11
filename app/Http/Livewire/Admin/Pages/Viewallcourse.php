<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\subject;
use Livewire\Component;

class Viewallcourse extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.viewallcourse');
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
