<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Sidebar extends Component
{
    public $lang;
    public function render()
    {
        return view('livewire.shared.sidebar');
    }

    public function logout()
    {   
        
        $this->lang = app()->getLocale() ?? "en";

        Auth::logout();  // Log the user out
        session()->invalidate();  // Invalidate the session
        session()->regenerateToken();  // Regenerate the CSRF token

        
        return redirect()->route('auth.login', ["locale"=>$this->lang]);
    }


}
