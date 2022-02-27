<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MyOffers extends Component
{
    public function render()
    {
        $url = '/api/myoffer';
        return view('livewire.offer.myoffers', compact('url'));
    }
}
