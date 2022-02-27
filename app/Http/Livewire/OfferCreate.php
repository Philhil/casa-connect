<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OfferCreate extends Component
{
    public function render()
    {
        if (Auth::user()->offer()->count() <= 5) {
            return view('livewire.offer.create');
        }
        //TODO : message: not more than 5 offers possible (anti spam)
        return redirect(route('myoffers'));
    }
}
