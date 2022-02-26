<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $total_offers = Offer::all()->count();
        return view('livewire.dashboard', compact('total_offers'));
    }
}
