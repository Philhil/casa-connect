<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $total_offers = Offer::whereDate('offerEndsAt', '>', \Carbon\Carbon::now())->count();
        return view('livewire.dashboard', compact('total_offers'));
    }
}
