<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;
    public $lang;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();
        $this->lang = app()->getLocale() ?? "en";

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            // Redirect to the intended page
            return redirect()->intended("/".$this->lang.'/admin');
        }

        $this->addError('email', 'The provided credentials are incorrect.');
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
