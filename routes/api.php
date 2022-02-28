<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/offer', function (Request $request) {

    $filterCity = $request->get('filterCity');
    $filterAmount = $request->get('filterAmount');
    $filterAvailableTill = $request->get('filterAvailableTill');

    $data = \App\Models\Offer::where(function ($query) {
        $query->whereDate('offerEndsAt', '>', \Carbon\Carbon::now())
            ->orWhereNull('offerEndsAt');
    });

    if(!empty($filterCity)) {
        //get all postcodes of City
    }

    if(!empty($filterAmount) && is_numeric($filterAmount) && $filterAmount >= 1) {
        $data = $data->where('amount', ">=", $filterAmount);
    }

    if (!empty($filterAvailableTill)) {
        $filterAvailableTill = \Carbon\Carbon::createFromFormat('Y-m-d', $filterAvailableTill);
        $data = $data->where(function ($query) use($filterAvailableTill) {
            $query->whereDate('offerEndsAt', '>=', $filterAvailableTill)
                ->orWhereNull('offerEndsAt');
        });
    }

    $data = $data->with('user')->orderBy('offers.id', 'desc')->paginate(10);
    return new \App\Http\Resources\OfferCollection($data);
});