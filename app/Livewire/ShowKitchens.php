<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kitchen;

class ShowKitchens extends Component
{
    public $kitchens;
    public function mount()
    {
        $this->kitchens = Kitchen::all();
    }

    public function render()
    {
        return view('livewire.show-kitchens')->layout('layouts.app');
    }
}
