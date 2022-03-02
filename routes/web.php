<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/impressum', function () {
    return view('legal.impressum');
})->name('impressum');

Route::get('/datenschutz', function () {
    return view('legal.datenschutz');
})->name('datenschutz');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');
Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/offer/{offer}', \App\Http\Livewire\OfferShow::class)->name('offer.show');
Route::post('/offer/contact', [\App\Http\Controllers\OfferController::class, 'contact'])->name('offer.contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');

    //offer
    Route::get('/offercreate', \App\Http\Livewire\OfferCreate::class)->name('offer.create');
    Route::post('/offer', [\App\Http\Controllers\OfferController::class, 'store'])->name('offer.store');
    Route::get('/myoffers', \App\Http\Livewire\MyOffers::class)->name('myoffers');
    Route::get('/offer/{offer}/remove', [\App\Http\Controllers\OfferController::class, 'destroy'])->name('offer.delete');
    //Route::get('/offer/{offer}/edit', \App\Http\Livewire\OfferEdit::class)->name('offer.edit');
});

//axio Routes where auth is necessary
Route::middleware('auth')->group(function () {
    Route::get('/api/myoffer', function (Request $request) {
        $data = \App\Models\Offer::where('user_id', Auth::user()->id)->orderBy('id')->with('user')->paginate(10);
        return $data->toJson();
    });
});

require __DIR__.'/auth.php';
