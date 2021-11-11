<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Body extends Component
{
    public $login_clk = false;

    public function render()
    {
        return view('livewire.home.body');
    }

    public function login(){
        $this->login_clk = true;
    } 

}
