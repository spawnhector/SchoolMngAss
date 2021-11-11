<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $accType;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login(){
        $validatedData = $this->validate();
        if ($this->accType == 'admin') {
            $validatedData['role'] = $this->accType;

            Auth::guard('user')->attempt($validatedData)
                ?$this->redirecTo('admin.dashboard')
                :dd('no');

        } elseif ($this->accType == 'teacher') {
            Auth::guard('teacher')->attempt([
                'teacher_nm'=>$this->email,
                'password'=>$this->password
            ])
                ?$this->redirecTo('admin.dashboard')
                :dd('no');

        }
        // auth()->guard('user')->user();
    }

    public function redirecTo($name){
        return redirect()->route($name);
    }
}
