<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterForm extends Component
{
    public $name, $email, $password, $passwordConfirmation, $lang;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|same:passwordConfirmation',
    ];

    public function register()
    {   
        
        $this->validate();
        $this->lang = app()->getLocale() ?? "en";

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        auth()->attempt(['email' => $this->email, 'password' => $this->password]);

        return redirect()->intended("/".$this->lang.'/admin');
    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
