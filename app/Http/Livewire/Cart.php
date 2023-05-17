<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        return view('livewire.cart');
    }

    public function checkout(): void
    {
        $this->dispatchBrowserEvent('close-modal', ['id' => 'cart']);
        $this->dispatchBrowserEvent('open-modal', ['id' => 'checkout']);
    }
}
