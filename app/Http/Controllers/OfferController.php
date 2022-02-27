<?php

namespace App\Http\Controllers;

use App\Http\Livewire\OfferShow;
use App\Http\Requests\ContactOfferRequest;
use App\Http\Requests\OfferRequest;
use App\Mail\NewRequestOnOffer;
use App\Mail\NewRequestOnOfferConfirmation;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request)
    {
        if (Auth::user()->offer()->count() <= 5) {
            $offer = new Offer($request->except('_token'));
            $offer['user_id'] = Auth::user()->id;
            $offer->save();
        }
        return redirect(route('myoffers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::with('user')->findOrFail($id);
        if($offer->user->id === Auth::user()->id) {
            $offer->delete();
        }
        return redirect(route('myoffers'));
    }

    public function contact(ContactOfferRequest $request)
    {
        $offer = Offer::with('user')->findOrFail($request->offer_id);

        if ($request->get('zip') != "spamprevention" || !empty($request->get('street')))
        {
            return null;
        }

        //send Mail to offerer
        Mail::to($offer->user->email)
            ->queue(new NewRequestOnOffer($offer,$request->get('mail'), $request->get('name'), $request->get('message')));

        //send Mail to requester
        Mail::to($request->get('mail'))
            ->queue(new NewRequestOnOfferConfirmation($offer, $request->get('name'), $request->get('message')));

        return redirect('dashboard');
    }
}
