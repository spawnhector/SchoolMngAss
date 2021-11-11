<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class Content extends Component
{
    
    public $accType;
    public $actionType;

    public function render()
    {
        return view('livewire.modal.content');
    }

    public function selectAcc(){
        dd($this->accType);
    }
}
