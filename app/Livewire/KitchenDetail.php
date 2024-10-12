<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kitchen;

class KitchenDetail extends Component
{
    public $kitchen;

    public function mount($id)
    {
        // Fetch the kitchen data by ID when component is mounted
        $this->kitchen = Kitchen::findOrFail($id)->with('building.city','additional_services')->first();
    }

    public function render()
    {
        return view('livewire.kitchen-detail')->layout('layouts.app');
    }
}
