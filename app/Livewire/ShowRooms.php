<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kitchen;

class ShowRooms extends Component
{
    public $kitchens;
    public function mount()
    {
        $this->kitchens = Kitchen::all(); // Fetch all rooms
    }

    public function render()
    {
        return view('livewire.show-rooms');
    }
}
