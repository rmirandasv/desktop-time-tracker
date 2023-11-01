<?php

namespace App\Livewire\Pages\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Register extends Component
{
    #[Rule('required|min:3|max:255')]
    public $name;

    #[Rule('required|email|unique:users,email')]
    public $email;

    #[Rule('required|min:8|max:255|confirmed')]
    public $password;

    #[Rule('required')]
    public $password_confirmation;

    public function render()
    {
        return view('livewire.pages.auth.register');
    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->login($user);

        return $this->redirectRoute('home', navigate: true);
    }
}
