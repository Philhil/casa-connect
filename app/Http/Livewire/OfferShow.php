<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Livewire\Component;

class OfferShow extends Component
{
    public $offer_id = '';

    public function mount($offer)
    {
        $this->offer_id = $offer;
    }

    public function render()
    {
        $offer = Offer::findOrFail($this->offer_id);
        return view('livewire.offer.show', compact('offer'));
    }
}
