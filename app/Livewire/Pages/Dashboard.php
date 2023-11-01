<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.user', ['title' => 'Dashboard'])]
    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
