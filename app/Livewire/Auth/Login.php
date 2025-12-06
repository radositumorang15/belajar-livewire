<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return;
        }

        return redirect()->to('/dashboard');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
