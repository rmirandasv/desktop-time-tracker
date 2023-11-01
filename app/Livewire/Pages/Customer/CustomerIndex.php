<?php

namespace App\Livewire\Pages\Customer;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CustomerIndex extends Component
{
    #[Layout('components.layouts.user', ['title' => 'Customers'])]
    public function render()
    {
        return view('livewire.pages.customer.customer-index');
    }
}
