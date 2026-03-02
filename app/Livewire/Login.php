<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        dd($this->email, $this->password);
    }
    public function render()
    {
        return view('livewire.login')
            ->layout('components.layouts.app');
    }
}
